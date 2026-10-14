# Mailrelay: SMTP-Fehlerdetails in HTTP-Antworten bereinigt

Datum: 14.10.2026. Zweiter gezielter Schritt der freigegebenen Mailrelay-Sicherheitskorrektur. Nutzer bestätigt: alter Editor ohne Speichern geschlossen.

## Befund und einzige Änderung

Fünf JSON-Antworten in den mail()-Fallback-Zweigen enthielten `smtp_error => $result`. Der interne SMTP-Fehlertext kann aus LOGIN-Schritten Base64-Anmeldedaten und Serverantworttexte übernehmen, auch bei akzeptiertem Fallback.

Nur diese fünf Werte wurden durch `SMTP delivery failed` ersetzt. Feldname und Typ, success, HTTP-Status, has_attachment und Versandlogik bleiben erhalten. Die Meldung betrifft den SMTP-Versuch; sie bedeutet bei akzeptiertem Fallback kein Scheitern des gesamten Requests. Clients, die konkrete Fehlertexte auswerten, erhalten jetzt die allgemeine Meldung. Unabhängige Astra-Prüfung bestätigt Ansatz und Testmatrix.

Geheimnisfreier Patch: [smtp-errors-generic.diff](../../maintenance/mailrelay/smtp-errors-generic.diff). Der Debuglog-Fix bleibt erhalten.

## Verifikation

- Zusätzliche verschlüsselte Prewrite-Datei außerhalb Git: mail-relay.before-response-fix.php.dpapi. Enthält den normalisierten, zuvor live geprüften Editorquelltext nach dem Debuglog-Fix. Entschlüsselung und Bytevergleich erfolgreich.
- Baseline-SHA-256: `bbb8fd67c4706c25cc1e2edaeb5c4ca91f4734fe02760646b0fd10b568863e54`.
- Baseline-Test: fünf von sieben Szenarien schlagen fehl; alle fünf geben tatsächlich den synthetischen SMTP-Canary aus.
- Patch-Test: sieben Szenarien bestanden. Gesamte JSON-Struktur, HTTP-Status, simulierte Mailaufrufe und Anhangreihenfolge geprüft.
- Echte Antwortsektion im Testnamensraum ausgeführt; native mail()-Funktion zusätzlich deaktiviert. Keine SMTP-Verbindung und keine E-Mail.
- Szenarien: SMTP akzeptiert mit/ohne Anhang; Fallback mit Anhang akzeptiert; zweiter Fallback ohne Anhang akzeptiert; beide Versuche fehlgeschlagen; einfacher Fallback akzeptiert/fehlgeschlagen.
- Vollständiger Quellcode besteht PHP-8.2-Grammatikprüfung im Speicher.
- Live-Hash vor Änderung entspricht der Baseline. Editorinhalt vor Speichern exakt mit dem geprüften Zieltext abgeglichen.
- Nach Speichern Datei erneut geladen: Zieltext und Hash identisch; übriger Code unverändert.
- Ziel-SHA-256: `b002854661205b235747f3b6cf1679ed9063d0c2da4dc79130feb99e70af5a61`.
- Öffentlicher GET nach Änderung: HTTP 405 ohne Token, Nutzdaten oder Versand.
- Prüfeditor danach ohne weitere Änderung geschlossen. Beleg zeigt nur den unteren Antwortabschnitt ohne Konfigurationsgeheimnisse.

Test: `php -n -d disable_functions=mail tests/mailrelay/test-relay-responses.php`, vollständiger Relay-Quelltext auf STDIN. Produktiven Quelltext und Logs nicht ins Repository übernehmen.

## Grenzen

Kein produktiver Versand- oder Zustelltest. Ein true von mail() bedeutet Transportannahme, keine bestätigte Zustellung. Der vorhandene Fallback kann nach fehlgeschlagenem Anhangversand Erfolg ohne Anhang melden; dieses unveränderte Verhalten muss separat mit dem tatsächlichen Aufrufer geprüft werden. Weitere PHP-Ausgaben, TLS-/Authentifizierungskonfiguration und kontrollierte Zugangsdatenrotation sind nicht Teil dieses Austauschs von fünf Werten.
