# Mailrelay: Datei-Debuglog am 14.10.2026 abgeschaltet

## Auftrag und Sicherung

Der Betreiber bestätigt tägliche vollständige Provider-Backups und eine bereits durchgeführte erfolgreiche Komplettwiederherstellung. Die am 14.10.2026 vorgeschlagene gezielte Mailrelay-Korrektur ist freigegeben. Zusätzlich sind unveränderte Live-Dateien `mail-relay.php` (24.289 Bytes) und `mail-debug.log` (516.540 Bytes) außerhalb der Git-Projekte mit Windows-DPAPI CurrentUser verschlüsselt gesichert. Entschlüsselung und SHA-256-Prüfsummen wurden geprüft. Wiederherstellung benötigt das ursprüngliche Windows-Benutzerprofil samt DPAPI-Schlüsseln.

## Ursache und einzige Live-Änderung

Die zentrale `relay_log($message)` schrieb freien Text nach `mail-debug.log` im Webroot. Darunter befanden sich zwei SMTP-Kommandopfade einschließlich AUTH PLAIN und LOGIN-Anmeldeschritten sowie Betreff, Empfänger und Dateinamen. Unabhängige Prüfung: Astra medium empfiehlt das Abschalten des Datei-Debuglogs gegenüber nachträglicher Freitextfilterung.

Nur der Funktionskörper von `relay_log($message)` wurde durch eine dokumentierte leere Funktion ersetzt. Die Signatur und der implizite Rückgabewert `null` bleiben erhalten. SMTP, TLS, Empfänger, HTTP-Antworten und Zugangsdaten wurden in diesem Schritt nicht geändert. In der geprüften Datei existiert ein `file_put_contents` innerhalb der Loggerfunktion; die weiteren Schreibaufrufe sind SMTP-Socket-`fwrite`. Kein Aufrufer wertet den Logger-Rückgabewert aus.

Geheimnisfreie Ersatzfunktion: [relay-log-disabled.php](../../maintenance/mailrelay/relay-log-disabled.php). Der vollständige produktive Relay-Quellcode und das historische Log gehören nicht ins Repository.

## Verifikation

- Test zuerst gegen die extrahierte Originalfunktion: erwartetes FAIL, da eine Datei entsteht und bestehender Inhalt verändert wird.
- Identischer Test gegen die Ersatzfunktion: PASS, 11 Prüfungen mit rein synthetischen AUTH-/LOGIN-, Adress-, Gesundheits-, Dateinamen- und Fehlerdaten sowie Zeilenumbrüchen.
- PHP 8.2.34: `php -n -l maintenance/mailrelay/relay-log-disabled.php` erfolgreich.
- Vollständige zusammengesetzte Datei durch PHP `token_get_all(..., TOKEN_PARSE)` im Speicher geprüft. UTF-8-Übertragung durch SHA-256 abgeglichen; keine Ausführung des Mailtransports und keine vollständige Klartext-Testdatei.
- Vor Speichern: Live-Stand entspricht nach Vereinheitlichung der Zeilenenden der gesicherten Fassung.
- Vor Speichern: Der Editorinhalt stimmt exakt mit dem lokal geprüften Zielstand überein.
- Nach Speichern: Datei erneut im Editor geladen; Zielstand stimmt exakt überein, außerhalb der Loggerfunktion identisch.
- Öffentlicher GET-Aufruf von `mail-relay.php`: HTTP 405 wie vorgesehen, ohne E-Mail.
- Öffentliche HEAD-Anfrage auf `mail-debug.log`: HTTP 403. Keine Log-Inhalte abgerufen.

Normalisierte UTF-8-SHA-256:
- Vorher: `d83be18536ef2f7ec03ae04a28e057858b23d4a37ab4b9c8f5ee8d3cfbbceee8`
- Nachher: `bbb8fd67c4706c25cc1e2edaeb5c4ca91f4734fe02760646b0fd10b568863e54`

## Offene Grenzen

- Kein vollständiger Versandtest durchgeführt; ein erfolgreicher Mailversand wird nicht behauptet.
- Historischer Live-Logbestand wurde nicht gelöscht; die geprüfte öffentliche Anfrage wurde gesperrt. Das beweist keine historische Unzugänglichkeit.
- Andere Ausgabepfade, insbesondere freie SMTP-Fehlertexte in HTTP-Antworten, sowie Zugangsdatenrotation benötigen einen eigenen gezielten Schritt.
- Der alte ursprüngliche Editor-Tab verlor seine Browsersteuerungsverbindung vor dem Speichern. Gespeichert und erneut verifiziert wurde in einem frischen Tab. Betreiber wurde aufgefordert, den alten Editor ohne Speichern zu schließen, damit kein veralteter Puffer zurückgeschrieben wird.
- Weitere SEO-, Plugin-, Schema- und Profiländerungen wurden nicht durchgeführt.
