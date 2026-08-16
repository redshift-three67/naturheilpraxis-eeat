# Welle 11 · Legal / Utility

**Datum:** 2026-08-16 · CDP 9224 · live_verified

## Direktive

Kein Verfahrenstext-Rewrite. Trust-Seiten an NAP, Meta, H1 und Indexierung angleichen.

## Prewrite

`prewrite/README-WELLE-11-legal.md`  
`prewrite/w11-<slug>-frontend-before.html` · `w11-<slug>-content-before.html` · `w11-<slug>-before.json`  
Rank-Math-Vorher: `w11-*-rankmath-before.json` · H1: `w11-doku-h1-before.json`

## Live

| URL | Änderung |
|-----|----------|
| `/impressum/` | geprüft: NAP = HFCM #7 / Schema. Kein Write. |
| `/datenschutzerklaerung/` | Meta ergänzt. Body unverändert. |
| `/datenschutzerklaerung-tools/` | Meta ergänzt. |
| `/heilpraktiker-rechtshinweise/` | Meta ergänzt. |
| `/rechtshinweise-therapieverfahren/` | Meta ohne „Sanfte, holistische…“. |
| `/gesundheitsrelevante-dokumentation/` | H1 korrigiert (war Impressum). Meta „Tierstall“ entfernt. |
| `/corona-praxis-offen/` | Rank Math **noindex**. HFCM **#14** historischer Hinweis. Lockdown-Text nicht umgeschrieben. |
| `/downloadbereich-naturheilpraxis-rauch/` | Lovable bleibt. Anamnese-`/download/…`-Link per #14 → Lovable. Meta ohne Corona-Push. |

HFCM #14 `E-E-A-T Legal Welle 11`. Kanonisch: `snippets/legal-w11.html`.

## Offen (Betreiber)

Fünf weitere `/download/…`-URLs (Erstinformation, Corona-Auskunft, Vereinbarung, Datenschutz-PDF, Neuaufnahme) sind **404** (`404-solution` → Startseite). Nur die Anamnese-DOC existiert unter `/wp-content/uploads/peter/Anamnese_Peter_Rauch_Heilpraktiker.doc`. Dateien neu hochladen oder Buttons entfernen.

## Rollback

Metas laut `w11-*-rankmath-before.json`. H1 laut `w11-doku-h1-before.json`. Corona: Kein Index aus. HFCM #14 deaktivieren.
