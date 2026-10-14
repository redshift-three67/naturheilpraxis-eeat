<?php
namespace MailRelayResponseTests;

// Run: php -n -d disable_functions=mail tests/mailrelay/test-relay-responses.php
// Complete relay source arrives on STDIN; only its response section is evaluated.
if (\function_exists('mail')) {
    fwrite(STDERR, "Native mail() must be disabled for this test.\n");
    exit(2);
}
$source = stream_get_contents(STDIN);
try {
    token_get_all($source, TOKEN_PARSE);
} catch (\ParseError $error) {
    fwrite(STDERR, "Full relay source failed PHP grammar check.\n");
    exit(2);
}
$anchor = 'if ($result === true) {';
if (substr_count($source, $anchor) !== 1) {
    fwrite(STDERR, "Cannot identify the single response section safely.\n");
    exit(2);
}
$responseCode = substr($source, strpos($source, $anchor));
unset($source);
$mailQueue = [];
$mailCalls = [];

function mail($to, $subject, $body, $headers, $params) {
    global $mailQueue, $mailCalls;
    $mailCalls[] = str_contains($body, 'Content-Disposition: attachment;');
    if (!$mailQueue) {
        throw new \RuntimeException('Unexpected simulated mail call.');
    }
    return array_shift($mailQueue);
}

function relay_log($message) {
    // No file or console output in the response test.
}

function execute_response($code, $smtpResult, $withAttachment, $queue) {
    global $mailQueue, $mailCalls;
    $mailQueue = $queue;
    $mailCalls = [];
    $result = $smtpResult;
    $RELAY_VERSION = 'synthetic-test';
    $to = 'synthetic@example.invalid';
    $from = 'sender@example.invalid';
    $envelope_from = 'relay@example.invalid';
    $LOCAL_SMTP_ACCOUNTS = [];
    $encodedSubject = 'Synthetic relay test';
    $html = '<p>Synthetic test body</p>';
    $attachInfo = $withAttachment ? 'synthetic.pdf' : 'none';
    $attachment = $withAttachment ? [
        'base64' => base64_encode('synthetic PDF data'),
        'filename' => 'synthetic.pdf',
        'contentType' => 'application/pdf',
    ] : null;
    http_response_code(200);
    ob_start();
    try {
        eval('namespace ' . __NAMESPACE__ . ";\n" . $code);
        $json = ob_get_contents();
    } finally {
        ob_end_clean();
    }
    return [
        json_decode($json, true, 512, JSON_THROW_ON_ERROR),
        http_response_code(),
        $mailCalls,
        $mailQueue,
    ];
}

$version = 'synthetic-test';
$safeError = 'SMTP delivery failed';
$secret = base64_encode('synthetic-password');
$smtpFailure = "CMD '$secret' expected 235 got 535: AUTH failed for patient@example.invalid\nsynthetic health data";
$cases = [
    ['smtp-success-simple', true, false, [], 200, [], [
        'success' => true, 'message' => 'Email sent via SMTP (QMail)',
        'version' => $version, 'has_attachment' => false,
    ]],
    ['smtp-success-attachment', true, true, [], 200, [], [
        'success' => true, 'message' => 'Email sent via SMTP (QMail)',
        'version' => $version, 'has_attachment' => true,
    ]],
    ['fallback-attachment-accepted', $smtpFailure, true, [true], 200, [true], [
        'success' => true, 'message' => 'Email sent via mail() fallback with attachment',
        'version' => $version, 'has_attachment' => true, 'smtp_error' => $safeError,
    ]],
    ['fallback-without-attachment-accepted', $smtpFailure, true, [false, true], 200, [true, false], [
        'success' => true, 'message' => 'Email sent via mail() fallback (no attachment)',
        'version' => $version, 'has_attachment' => false, 'smtp_error' => $safeError,
    ]],
    ['fallback-attachment-both-failed', $smtpFailure, true, [false, false], 500, [true, false], [
        'success' => false, 'error' => 'Failed to send email',
        'version' => $version, 'smtp_error' => $safeError,
    ]],
    ['fallback-simple-accepted', $smtpFailure, false, [true], 200, [false], [
        'success' => true, 'message' => 'Email sent via mail() fallback',
        'version' => $version, 'smtp_error' => $safeError,
    ]],
    ['fallback-simple-failed', $smtpFailure, false, [false], 500, [false], [
        'success' => false, 'error' => 'Failed to send email',
        'version' => $version, 'smtp_error' => $safeError,
    ]],
];
$failed = 0;
$disclosed = 0;
set_error_handler(function($severity) {
    if (error_reporting() & $severity) {
        throw new \RuntimeException('PHP warning during isolated response test.');
    }
    return false;
});
foreach ($cases as [$name, $smtpResult, $withAttachment, $queue, $status, $calls, $expected]) {
    try {
        [$actual, $actualStatus, $actualCalls, $remaining] = execute_response(
            $responseCode, $smtpResult, $withAttachment, $queue
        );
        $serialized = json_encode($actual, JSON_THROW_ON_ERROR);
        $leaks = str_contains($serialized, $secret)
            || str_contains($serialized, 'patient@example.invalid')
            || str_contains($serialized, 'synthetic health data');
        if ($leaks) { $disclosed++; }
        if ($actual !== $expected || $actualStatus !== $status || $actualCalls !== $calls || $remaining || $leaks) {
            $failed++;
            fwrite(STDERR, "FAIL: $name response contract, isolation, or diagnostic disclosure.\n");
        }
    } catch (\Throwable $error) {
        fwrite(STDERR, "Unsafe test execution or invalid response; no response contents emitted.\n");
        exit(2);
    }
}
restore_error_handler();
if ($failed) {
    fwrite(STDERR, "FAIL: $failed of 7 response scenarios; $disclosed exposed the SMTP canary.\n");
    exit(1);
}
echo "PASS: 7 response scenarios; 5 protected fallback branches; native mail() disabled.\n";
