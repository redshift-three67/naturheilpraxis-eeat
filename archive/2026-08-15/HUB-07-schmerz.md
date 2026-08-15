# HUB-07 Schmerztherapie als Einstieg

**Datum:** 2026-08-15 · CDP 9224 · live_verified

## Sicherung

- `prewrite/hub-schmerz-fields-before.json`
- `prewrite/hub-schmerz-frontend-before.json`

Felder 7–9 ohne Editor. Hub hängt an Feld 6 (Kinesiologie, letzter gefüllter Absatz).

## Live

Feld 6 auf `/schmerztherapie-augsburg/` behält den Kinesiologie-Text und hängt an:

- Schmerztherapie ist ergänzend; kein Ersatz für ärztliche Behandlung, kein Heilversprechen
- Links: Entstehung von Schmerz, Manuelle Verfahren, Injektionstherapie, Naturheilkunde
- Zurück zur Startseite

Alle Hub-URLs HTTP 200. Disclaimer, Schema, HUB-01…06 unverändert.

## Rollback

Feld 6 auf den Wert in `hub-schmerz-fields-before.json` Index 6 zurück.
