# HUB-05 Psychotherapie als Einstieg

**Datum:** 2026-08-15 · CDP 9224 · live_verified

## Sicherung

- `prewrite/hub-psychotherapie-fields-before.json`
- `prewrite/hub-psychotherapie-frontend-before.json`

Felder 8–9 ohne Editor. Hub hängt an Feld 7 (letzter gefüllter Absatz).

## Live

Feld 7 auf `/psychotherapie-augsburg/` behält die bestehenden Schlussabsätze und hängt an:

- Psychotherapie = ergänzendes Gesprächs- und Begleitangebot; kein Ersatz für ärztliche/psychiatrische Behandlung, kein Heilversprechen
- Links: Hypnose, Heilmeditation, Naturheilkunde
- Zurück zur Startseite

Alle Hub-URLs HTTP 200. Disclaimer, Schema, HUB-01…04 unverändert.

## Rollback

Feld 7 auf den Wert in `hub-psychotherapie-fields-before.json` Index 7 zurück.
