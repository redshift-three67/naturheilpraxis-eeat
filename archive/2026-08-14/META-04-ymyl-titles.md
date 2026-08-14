# META-04 – Werbetitel entfernt (YMYL)

**Datum:** 2026-08-14 21:44 CEST  
**CDP:** `127.0.0.1:9224`  
**Status:** live_verified

## Pre-Write

`archive/2026-08-14/prewrite/README-META-04-ymyl-titles.md`

## Änderung (ein logischer Schritt)

| ID | Vorher | Nachher |
|----|--------|---------|
| 751 | `Bioresonanz-Therapie \| Gesund durch Frequenztherapie` | `Bioresonanz-Therapie \| Naturheilpraxis Rauch` |
| 728 | `Elektroakupunktur nach Dr Voll \| Mehr Energie` | `Elektroakupunktur nach Dr. Voll \| Naturheilpraxis Rauch` |

Metas unverändert.

## Verifizierung

- Bio: Titel ohne Frequenztherapie-Claim, Meta mit `ergänzende`
- EAV-Voll: Titel ohne „Mehr Energie“, Meta Hinweisdiagnostik
- robots `follow, index`, Disclaimer + MedicalClinic unverändert

Frontend rendert „Nach“ groß (Rank-Math „Titel großschreiben“) – kein inhaltlicher Claim.

## Rollback

Snippet-Titel auf Vorher-Werte.
