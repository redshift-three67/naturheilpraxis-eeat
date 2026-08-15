# Welle 2 · RESP-01 + B5-IMG-01/02

**Datum:** 2026-08-15 · CDP 9224 · live_verified  
**HFCM:** #9 · Kanonisch `snippets/speed-slider-mobile.css`

## Ursache

YOO `sizes="(max-aspect-ratio: 947/630) 150vh"` → Mobil 150 % von 844 = 1266 px → Datei **1583 px**.  
Slider-Höhe nur bis 959 px, `46vh` auf Tablet zu hoch.

## Live

- Kenburns aus bis 1399 px
- Höhe Mobil **320**, Tablet/Laptop **380** (inkl. 125 %-Zoom / 1280 CSS)
- Desktop ≥ 1400 unverändert hoch
- `sizes=100vw`; Folie 1 `eager/high`; Folie 2–n `lazy`
- Inhaltbilder: `sizes` + `lazy`, wenn nicht LCP

| Viewport | Höhe vorher | Höhe jetzt | LCP-Datei |
|----------|------------:|-----------:|-----------|
| 390 | 400 | **320** | 488 w (war 1583) |
| 768 | 646 | **380** | ~768–959 w |
| 1024 | 894 | **380** | 1024 w |
| 1280 | 981 | 789 (Desktop) | 1600 w |

## Rollback

HFCM #9 auf `prewrite/hfcm9-before-WELLE-2.html`
