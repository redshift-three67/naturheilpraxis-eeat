# HUB-06 Manuelle Verfahren als Einstieg

**Datum:** 2026-08-15 · CDP 9224 · live_verified

## Sicherung

- `prewrite/hub-manuell-fields-before.json`
- `prewrite/hub-manuell-frontend-before.json`

Felder 8–16 ohne Editor. Hub hängt an Feld 3 (Einleitungsliste).

## Live

Feld 3 auf `/manuelle-therapieverfahren-uebersicht/` behält die UL und hängt an:

- Manuelle Verfahren sind ergänzend; kein Ersatz für ärztliche Behandlung, kein Heilversprechen
- Links: Osteopathie, IMT, Lowen Systems, Microkinesi, Physiotherapie, Dorntherapie
- Zurück zur Startseite

Alle Hub-URLs HTTP 200. Disclaimer, Schema, HUB-01…05 unverändert.

## Rollback

Feld 3 auf den Wert in `hub-manuell-fields-before.json` Index 3 zurück.
