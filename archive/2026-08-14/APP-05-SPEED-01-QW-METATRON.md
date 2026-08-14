# APP-05 · SPEED-01 · QW-MENU-METATRON

**Datum:** 2026-08-14 23:14 CEST  
**CDP:** `127.0.0.1:9224`  
**Status:** live_verified

## APP-05 Anamnese-Button

HFCM #8: gleicher Beige-Ton wie „Jetzt Termin buchen“ (`#bebaa0`), **kleiner** (~360px / 59px), **zweizeilig**.

## SPEED-01 Slider mobil

Neues HFCM **#9** Header-CSS:

- ≤959px: Kenburns `animation:none`, Slider-Höhe ~46vh (gemessen 388px statt min 550)
- `prefers-reduced-motion`: Kenburns aus

## QW-MENU-METATRON

Menü 12: „NLS Diagnostik / Metatron Hospital System“ → **NLS-Diagnostik**.  
Kurzzeitig war der Top-Punkt „Rauch“ mitumbenannt (Selektor zu weit) → **sofort auf „Rauch“ zurückgesetzt**. Frontend: Rauch wieder korrekt.

## Rollback

HFCM #8 vorheriges HTML · HFCM #9 aus · Menülabels zurück.
