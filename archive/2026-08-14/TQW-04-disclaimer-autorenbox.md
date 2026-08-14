# TQW-04 – Disclaimer + Autorenbox

**Datum:** 2026-08-14  
**Umgebung:** Live  
**Transport:** HFCM  
**Status:** live_verified

## Pre-Write

- HFCM-Liste vor Änderung: Snippets 1–6 (id=5 inactive Schema-Duplikat, id=6 active Schema)
- Kein bestehendes globales Footer-Disclaimer-Snippet
- Rechtshinweis-Seiten existieren: `/heilpraktiker-rechtshinweise/`, `/rechtshinweise-therapieverfahren/`

## Änderung

- Neues HFCM-Snippet **id=7**
- Name: `E-E-A-T Disclaimer + Autorenbox`
- Type: HTML | Location: **Footer** | Display: **All** | Status: **active** | Devices: both

## Inhalt (kanonisch)

Siehe `snippets/disclaimer-autorenbox.html`

## Verifizierung Live

- Home: `eeat-disclaimer-author` vorhanden
- Text „ersetzen keine ärztliche Diagnose“ vorhanden
- „Keine Heilversprechen“ vorhanden
- Autorenzeile Peter Rauch + Stand August 2026 vorhanden
- NLS-Seite: Disclaimer ebenfalls sichtbar (sitewide)
- MedicalClinic Schema weiterhin 1×

## Rollback

HFCM → Snippet id=7 deaktivieren oder löschen.
