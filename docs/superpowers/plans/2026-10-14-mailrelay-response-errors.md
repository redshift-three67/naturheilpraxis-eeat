# Mailrelay: SMTP-Fehlerdetails aus HTTP-Antworten entfernen

Datum: 14.10.2026. Anschluss an die freigegebene Mailrelay-Sicherheitskorrektur; alte Editoransicht vom Nutzer ohne Speichern geschlossen.

Fünf JSON-Antworten geben `smtp_error => $result` aus. Der SMTP-Fehlerpfad kann komplette LOGIN-Nutzdaten in $result übernehmen. Nur diese fünf Werte werden durch den festen String `SMTP delivery failed` ersetzt. Feldname, Typ, Erfolg/Fehler, HTTP-Status, Anhangkennzeichen und Transport bleiben gleich. Unabhängige Astra-Prüfung bestätigt den eng begrenzten Ansatz. Clients dürfen den SMTP-Hinweis bei akzeptiertem Fallback nicht als Scheitern des gesamten Requests behandeln.

- [x] Echten Antwortabschnitt mit sieben synthetischen Szenarien testen; native mail()-Funktion deaktivieren und namensgebundenen Stub verwenden. Original muss in fünf Fallback-Antworten fehlschlagen.
- [x] Geheimnisfreie Diff-Datei erstellen, genau fünf Werte ersetzen; identische Tests müssen bestehen, vollständige Datei im Speicher syntaktisch prüfen.
- [x] Vorherigen geprüften Quelltext zusätzlich verschlüsselt außerhalb Git sichern und verifizieren; Live-Hash vor Änderung abgleichen.
- [x] Ein Live-Schritt über den WordPress-Dateimanager; Quelltext vor und nach Speichern exakt vergleichen; Methodensperre ohne Versand prüfen.
- [x] Befund, Grenzen und Status dokumentieren und nur eigene geheimnisfreie Änderungen gemäß Projektworkflow synchronisieren.

Testgrenzen: mail() akzeptiert bedeutet keine bestätigte Zustellung. Kein produktiver Versandtest. Bestehender Fallback ohne ursprünglich vorgesehenen Anhang bleibt ein eigener Befund. Andere PHP-Ausgaben und Zugangsdatenrotation sind nicht Teil dieses Austauschs von fünf Werten.

Ergebnis: docs/reviews/2026-10-14-mailrelay-response-errors.md. Git-Synchronisation wird mit dem Ergebnisbericht abgeschlossen.
