# Slider-Klon + Leerblöcke + Hub-Punkt

**Datum:** 2026-08-17  
**CDP:** `127.0.0.1:9224`  
**Status:** live_verified

## Änderung

1. `/online-anamnesebogen/`: selbstgebauter 2-Folien-Slider entfernt. Stattdessen Klon des YOO-Sliders von `/bioresonanz-therapie/` (4 Folien, Overlay, Slidenav), vollbreit vor `#tm-main`. Mobil weiter 240 px (#9).
2. HFCM #11: leere `p`/`h*`/`uk-panel` inkl. volle-Breite-Gitterzellen ohne Bild einklappen; sichtbaren Text trotz Scrollspy erzwingen. Bild+Text-Raster mit Medien unangetastet.
3. HFCM #17: 6-px-Kreis `#8ec760` an Hub-Links (Dropdown, Offcanvas, Top-Level-Hubs). Nicht am Hamburger.

## Verify

- Anamnese-Slider 550 px Desktop / 240 px Mobil, 4 Folien, erste Folie Bioresonanz/Trikombin.
- Bio-Hub: 0 sichtbare `<p></p>`-Leerzeilen nach dem zweiten Lauf.
- Start: 0 sichtbare leere Absätze.

## Rollback

Seite 6705 aus `ana-hub-content-before.json` bzw. vorherigem Hub-HTML; HFCM 8/11/17 aus `sg-hfcm*-before.html`.
