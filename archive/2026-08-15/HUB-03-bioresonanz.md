# HUB-03 Bioresonanz als Einstieg

**Datum:** 2026-08-15 · CDP 9224 · live_verified

## Sicherung

- `prewrite/hub-bioresonanz-fields-before.json`
- `prewrite/hub-bioresonanz-frontend-before.json`

Leeres Feld 7 öffnet keinen CodeMirror. Deshalb Feld 6 (letzter gefüllter Absatz, inkl. trikombin.com) ergänzt.

## Live

Feld 6 auf `/bioresonanz-therapie/` behält den bestehenden Trikombin-Text und hängt an:

- Bioresonanz = ergänzendes Verfahren; kein Ersatz für ärztliche Behandlung, kein Heilversprechen
- Links: Funktionsweise Bioresonanz/EAV, Akupunktur ohne Nadeln, BIT, EAV nach Voll, 150 MHz Broers, NLS-Diagnostik
- Zurück zur Startseite

Alle Hub-URLs HTTP 200. Disclaimer, Schema, Start-Hub und NLS-Hub unverändert.

## Rollback

Feld 6 auf den Wert in `hub-bioresonanz-fields-before.json` Index 6 zurück.
