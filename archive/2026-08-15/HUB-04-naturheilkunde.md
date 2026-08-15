# HUB-04 Naturheilkunde als Einstieg

**Datum:** 2026-08-15 · CDP 9224 · live_verified

## Sicherung

- `prewrite/hub-naturheilkunde-fields-before.json`
- `prewrite/hub-naturheilkunde-frontend-before.json`

Felder 8–14 ohne Editor. Hub hängt an Feld 3 (Einleitungsliste), nicht an den Hahnemann-Fließtext.

## Live

Feld 3 auf `/naturheilkunde/` behält die UL (Homöopathie … Neuraltherapie) und hängt an:

- Verfahren sind ergänzend; kein Ersatz für ärztliche Behandlung, kein Heilversprechen
- Links: Klassische Homöopathie, Komplex-Homöopathie, Phytotherapie, NAET, Darmsanierung, Injektionstherapie
- Zurück zur Startseite

Alle Hub-URLs HTTP 200. Disclaimer, Schema, HUB-01…03 und NLS-Slider unverändert.

## Rollback

Feld 3 auf den Wert in `hub-naturheilkunde-fields-before.json` Index 3 zurück.
