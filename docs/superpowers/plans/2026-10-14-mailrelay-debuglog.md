# Mailrelay Debuglog Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [x]`) syntax for tracking.

**Goal:** Neue vertrauliche Einträge in das produktive Datei-Debuglog verhindern.

**Architecture:** Nur `relay_log($message)` wird zu einer leeren, dokumentierten Funktion. Vollständiger Live-Quellcode wird ausschließlich im Speicher verarbeitet; das Repository enthält keine produktiven Geheimnisse.

**Tech Stack:** PHP 8.2, PowerShell 7, WordPress-Dateimanager über die bestehende Chrome-Verbindung.

- [x] Test in `tests/mailrelay/test-relay-log.php`: echte Funktion mit synthetischen sensiblen Meldungen aufrufen; keine neue oder veränderte Logdatei, Rückgabe null, kein Standardoutput.
- [x] Originalfunktion aus der verschlüsselten Sicherung extrahieren (keine Konstanten oder Zugangsdaten). Test muss mit Exitcode 1 fehlschlagen.
- [x] `maintenance/mailrelay/relay-log-disabled.php` erstellen: dokumentierte leere Funktion mit gleicher Signatur.
- [x] Test gegen Ersatzfunktion ausführen; Exitcode 0. Vollständige Datei im Speicher zusammensetzen und mit PHP 8.2 auf Syntax prüfen.
- [x] Live-Stand erneut lesen und gegen die Sicherung vergleichen. Nur die zentrale Funktion ersetzen; Präfix und Suffix unverändert lassen.
- [x] Genau diesen Live-Schritt speichern, erneut lesen und vergleichen. Öffentliche 405-Methodenantwort prüfen, ohne E-Mail zu versenden.
- [x] Beleg und Ergebnis dokumentieren; vorhandenen Live-Logbestand und weitere Ausgabepfade als offen ausweisen. Keine Loglöschung in diesem Schritt.
- [x] Nur eigene geheimnisfreie Änderungen versionieren. Fremde unversionierte Datei `docs/LIVE-ANALYSE-2026-08-28.md` nicht verändern.


Ergebnis: docs/reviews/2026-10-14-mailrelay-debuglog.md. Vollständige Datei über token_get_all(..., TOKEN_PARSE) und UTF-8-SHA-256 im Speicher geprüft. Git-Versionierung folgt nach Dokumentationsprüfung.
