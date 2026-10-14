# Mailrelay: vertrauliches Datei-Debuglog abschalten

Auftrag: Der Betreiber stimmt am 14.10.2026 dem vorgeschlagenen Mailrelay-Sicherheitsfix zu. Tägliche Provider-Backups und eine bereits erfolgreiche vollständige Wiederherstellung sind vom Betreiber bestätigt. Quellcode und Logdatei wurden zusätzlich unverändert mit Windows-DPAPI außerhalb der Git-Projekte gesichert und per Entschlüsselung/Prüfsumme geprüft.

## Ursache und Entscheidung

`mail-relay.php` schreibt über `relay_log($message)` ungefilterte SMTP-Kommandos, Empfänger, Betreff und weitere freie Texte in `mail-debug.log` im Webroot. AUTH PLAIN und die LOGIN-Schritte können dadurch Anmeldedaten protokollieren. Die unabhängige Astra-Prüfung empfiehlt, die zentrale Datei-Debugfunktion ohne Seiteneffekt zu belassen. Eine nachträgliche Freitextfilterung wäre komplexer und unnötig fehleranfällig.

Die einzige Produktionsänderung ersetzt den Funktionskörper durch eine dokumentierte leere Funktion. Alle Aufrufer und der bisherige implizite Rückgabewert `null` bleiben erhalten. SMTP, TLS, Empfänger, Nutzdaten und HTTP-Antworten werden nicht geändert.

## Abnahme und Grenzen

- Originalfunktion verletzt den Regressionstest: neue Datei entsteht bzw. bestehende Datei wächst.
- Ersatzfunktion besteht denselben Test mit synthetischen AUTH-/LOGIN-Daten, Adressen, Gesundheitsangaben, Dateinamen, Fehlertexten und Zeilenumbrüchen.
- Vollständige PHP-Datei besteht Syntaxprüfung; außerhalb der zentralen Funktion ist der Quellcode identisch.
- Vor dem Speichern wird der Live-Stand erneut gelesen und mit dem gesicherten Stand abgeglichen. Bei Abweichung kein Überschreiben.
- Nach dem Speichern wird der Quellcode erneut gelesen und mit dem vorgesehenen Stand verglichen. Ein öffentlicher GET-Aufruf prüft nur die bestehende 405-Methodenantwort, ohne E-Mail auszulösen.
- Kein vollständiger Versandtest ohne dafür bestimmten synthetischen Empfänger; ein erfolgreicher Versand wird nicht behauptet.
- Der vorhandene Live-Logbestand, andere Ausgabepfade und Zugangsdatenrotation bleiben getrennte offene Punkte. Keine Löschung des historischen Logs in diesem Änderungsschritt.

Echte Zugangsdaten und der vollständige Relay-Quellcode gehören nicht in dieses Repository. Hier liegen nur die geheimnisfreie Ersatzfunktion, Tests und Dokumentation.
