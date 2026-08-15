# BIT-H2 ohne „Hospital“

**Datum:** 2026-08-15 · CDP 9224 · live_verified  
Nur Slider-Titel auf `/biophysikalische-informationstherapie-bit/`.

## Sicherung

`prewrite/bit-h2-slider-before.json` · `prewrite/bit-h2-frontend-before.json`

## Live

NLS-Folie im BIT-Slider:

| Vorher | Nachher |
|--------|---------|
| `Metatron Hospital nach Nesterov` | `NLS-Diagnostik nach Nesterov` |

Sichtbarer Text der BIT-Seite enthält kein „Hospital“ mehr.  
NLS-Slider auf `/nls-diagnostik/` bleibt `NLS-Diagnostik – Metatron Hospital` (explizite Vorgabe, nur dort).

## Rollback

Slider-Titel der NLS-Folie auf der BIT-Seite zurück auf `Metatron Hospital nach Nesterov`.
