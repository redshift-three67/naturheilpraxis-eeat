# Welle 5 · Klein / extern

**Datum:** 2026-08-15 · CDP 9224

## QW-NOINDEX-PLUGIN

Plugin `noindex-seo/noindex-seo.php` **deaktiviert**.  
Löschen der Dateien: WP meldete „Löschen fehlgeschlagen“ (Rechte). Funktionell aus, Konfliktwarnung weg.

Sicherung: `prewrite/w5-noindex-plugin-before.json`

## QW-TITELCASE

Rank Math → Titel & Meta → Global → **Titel großschreiben** aus.  
Gespeichert, nach Reload weiter aus.

## Kontakt-Satz

HFCM **#12** `E-E-A-T Kontakt Anamnese-Satz`.  
Sichtbar auf `/kontakt/` (JS `pathname`). Satz + Lovable-Link, keine Diagnose.  
Kanonisch: `snippets/kontakt-anamnese-satz.html`

## GBP / Verzeichnisse (extern, nicht in WP)

Muss der Betreiber in Google und Portalen prüfen – hier nicht ausführbar:

1. Google-Unternehmensprofil: Name, **Friedrich-Deffner-Straße 19a, 86163 Augsburg**, Tel **0821 2621462**, Website `https://rauch-heilpraktiker.de`, Kategorie Heilpraktiker/Naturheilpraxis.
2. Keine Heilversprechen in GBP-Texten.
3. Gleiche NAP in Impressum, Footer (HFCM #7) und Schema.
4. Optional: lokale Verzeichnisse nur mit denselben Daten, kein Massen-Listing.

## Rollback

- noindex: Plugin wieder aktivieren (nicht nötig).
- Titelcase: Toggle wieder an.
- HFCM #12 deaktivieren.
