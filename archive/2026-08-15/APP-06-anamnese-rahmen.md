# APP-06 Anamnese-Button PE-Breite + grüner Rahmen

**Datum:** 2026-08-15  
**CDP:** `127.0.0.1:9224`  
**Status:** live_verified

## Live

HFCM **#8** aktualisiert. Kanonisch: `snippets/online-anamnese-footer.html`

- Rahmen `2px solid #8ec760` (`rgb(142, 199, 96)` = Cookie-„Akzeptieren“)
- Beide Instanzen (unter „Jetzt Termin buchen“ und unter ProvenExpert)
- Instanz `#eeat-online-anamnese-pe`: Breite = ProvenExpert-Bild

| Viewport | PE-Bild | PE-Button | Hero-Button |
|----------|---------|-----------|-------------|
| 390×844 | 315 | 315 | 346 |
| 1440×900 | 337 | 337 | 360 |

Vorher PE-Button 378 / 392 (breiter als das Bild).

## Rollback

HFCM #8 auf `archive/2026-08-15/prewrite/hfcm8-before-APP-06.html`
