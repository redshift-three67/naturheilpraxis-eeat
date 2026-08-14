# NOINDEX-01 – EAV + BIT wieder indexierbar

**Datum:** 2026-08-14 21:37 CEST  
**CDP:** `127.0.0.1:9224`  
**Status:** live_verified

## Pre-Write

`archive/2026-08-14/prewrite/README-NOINDEX-01.md`

## Änderung (ein logischer Schritt)

Rank Math → Erweitert → Roboter-Meta auf zwei TQW-03-Seiten:

| ID | Seite | Vorher | Nachher |
|----|-------|--------|---------|
| 717 | BIT | Kein Index | **Index** |
| 5430 | EAV / Hinweisdiagnostik | noindex im Frontend | **Index** |

Kein Plugin deaktiviert. noindex-SEO-Plugin bleibt an (nur Konflikt-Hinweis).

## Verifizierung Frontend

- BIT: `follow, index, max-snippet:-1, …`
- EAV: `follow, index, max-snippet:-1, …` (kanonische URL `…-nach-dr-voll/`)
- Disclaimer + MedicalClinic unverändert

## Rollback

Rank Math Erweitert → **Kein Index** auf 717 und 5430.
