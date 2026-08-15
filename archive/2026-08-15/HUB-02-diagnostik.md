# HUB-02 NLS als Diagnostik-Einstieg

**Datum:** 2026-08-15 · CDP 9224 · live_verified

## Sicherung

- `prewrite/hub-diagnostik-nls-fields-before.json` (Felder 0–10 vor dem Write)
- `prewrite/hub-diagnostik-frontend-before.json`
- `prewrite/nls-fields-before.json` (älterer Feldstand nach CONTENT-01b)

Leeres Feld 8 öffnet im YOO-Builder keinen CodeMirror (Felder 8–10 ohne Editor). Deshalb wie HUB-01: bestehendes Textfeld ergänzen.

## Live

Feld 7 (`/nls-diagnostik/`) behält den Absatz zu nicht-linearen Verfahren und hängt an:

- NLS = ergänzendes Hinweisverfahren; ersetzt keine Laborwerte / keine ärztliche Diagnose
- Links: Hinweisdiagnostik-Überblick, EAV nach Voll, Vieva Pro, Labor-/Biodiagnostik, Irisdiagnose, Bioresonanz vs. EAV
- Zurück zur Startseite

Alle Hub-URLs HTTP 200. Disclaimer HFCM #7, Schema #6, Kontrast #11 unverändert. Startseiten-Hub unverändert.

## Rollback

Feld 7 auf den Wert in `hub-diagnostik-nls-fields-before.json` Index 7 zurück.
