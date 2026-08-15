# SPEED-02 Slider WebP + LCP

**Datum:** 2026-08-15  
**CDP:** `127.0.0.1:9224`  
**Status:** live_verified

## Befund

YOOTheme-Cache liefert die Folien bereits als WebP. Homepage lädt **keine** Original-JPEGs.

| Variante | Größe |
|----------|--------|
| LCP mobil (390 px) | ~80 KB WebP |
| Folie 0 Desktop-Cache | 31–101 KB |
| Größte Folie (Zen) | ~159–193 KB |

## Änderung

HFCM **#9**: erstes Slideshow-Bild `loading=eager` + `fetchpriority=high` (vorher `lazy`).  
Alle Lovable-Links `rel=noopener`.

## Rollback

HFCM #9 auf `archive/2026-08-15/prewrite/hfcm9-before-SPEED-02.html`.
