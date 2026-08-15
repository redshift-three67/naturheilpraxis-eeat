# HUB-01 Startseite als Praxis-Einstieg

**Datum:** 2026-08-15 · CDP 9224 · live_verified

## Sicherung

- `prewrite/home-hub-fields-before.json`
- `prewrite/home-frontend-outline.json`

## Live

Feld 6 ergänzt (bestehendes Headline-Feld):

- So läuft ein Termin (Gespräch / Untersuchung / Planung)
- Heilpraktiker, kein Arzt; Link Rechtshinweise
- Themenlinks: Diagnostik, Bioresonanz, Naturheilkunde, Psychotherapie, Manuelle Verfahren, Schmerztherapie, Kontakt
- Anamnese-Link `lovable.app` `target=_blank` `rel=noopener`

Feld 7-Titel „Themen und Verfahren“ hat im Input nicht gegriffen. Alte H3-Zeile über den Karten bleibt. Hub-Block selbst ist sichtbar.

Hub-URLs HTTP 200. Disclaimer unverändert.

## Rollback

Feld 6 auf `home-hub-fields-before.json` Index 6 zurück.
