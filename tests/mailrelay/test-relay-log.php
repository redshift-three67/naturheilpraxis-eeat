<?php
// Run: php -n tests/mailrelay/test-relay-log.php <function-only.php>
if ($argc !== 2 || !is_file($argv[1])) {
    fwrite(STDERR, "Expected a PHP file containing only relay_log().\n");
    exit(2);
}
$testDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'relay-log-test-' . bin2hex(random_bytes(8));
if (!mkdir($testDir, 0700)) {
    throw new RuntimeException('Cannot create isolated test directory.');
}
$fixture = $testDir . DIRECTORY_SEPARATOR . 'relay-under-test.php';
$log = $testDir . DIRECTORY_SEPARATOR . 'mail-debug.log';
copy($argv[1], $fixture);
require $fixture;
$messages = [
    'SMTP >> AUTH PLAIN ' . base64_encode("\0synthetic-user\0synthetic-password") . ' -> 235',
    'SMTP >> ' . base64_encode('synthetic-user') . ' -> 334',
    'SMTP >> ' . base64_encode('synthetic-password') . ' -> 235',
    'Accepted: to=synthetic@example.invalid from=patient@example.invalid subject=synthetic health information attachment=synthetic-anamnese.pdf',
    "SMTP FAIL: CMD '" . base64_encode('synthetic-password') . "' expected 235 got 535\r\npatient@example.invalid",
    'Unauthorized: remote=192.0.2.123',
    'SMTP OK: to=synthetic@example.invalid attachment=synthetic-anamnese.pdf',
    "Unknown future diagnostic message\nsynthetic health information",
];
$failures = [];
$checks = 0;
try {
    ob_start();
    foreach ($messages as $index => $message) {
        $checks++;
        if (relay_log($message) !== null) {
            $failures[] = 'Unexpected return value for case ' . $index;
        }
    }
    $output = ob_get_clean();
    $checks += 2;
    if ($output !== '') {
        $failures[] = 'Function wrote to standard output.';
    }
    clearstatcache(true, $log);
    if (file_exists($log)) {
        $failures[] = 'Function created a debug log from confidential test messages.';
    }
    $seed = "existing synthetic log marker\n";
    file_put_contents($log, $seed);
    foreach ($messages as $message) {
        relay_log($message);
    }
    $checks++;
    if (file_get_contents($log) !== $seed) {
        $failures[] = 'Function changed an existing debug log.';
    }
} finally {
    if (file_exists($log)) {
        unlink($log);
    }
    unlink($fixture);
    rmdir($testDir);
}
if ($failures) {
    foreach ($failures as $failure) {
        fwrite(STDERR, 'FAIL: ' . $failure . "\n");
    }
    exit(1);
}
echo 'PASS: ' . $checks . " logging isolation checks; no mail transport executed.\n";
