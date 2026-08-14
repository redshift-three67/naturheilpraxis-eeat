# APP-01 – Footer-Link Online-Anamnesebogen

**Datum:** 2026-08-14 22:14 CEST  
**CDP:** `127.0.0.1:9224`  
**Status:** live_verified

## Pre-Write

`archive/2026-08-14/prewrite/README-APP-01-footer.md`

## Änderung (ein Schritt)

WP-Menü **topmenu** (ID 39), Widget `#nav_menu-7` im Footer:

Custom-Link **Online-Anamnesebogen** → `https://naturheilpraxis-rauch.lovable.app/`  
`target=_blank` (Browser setzt bei `_blank` implizit noopener).

HFCM #7 Disclaimer unangetastet.

## Verifizierung

- Home + Kontakt: Link sichtbar, Label korrekt
- MedicalClinic + Disclaimer unverändert

## Rollback

Menüs → topmenu → Punkt „Online-Anamnesebogen“ entfernen → Menü speichern.

## Hinweis

Widget `#nav_menu-7` bleibt `uk-visible@s` (Bestand, kleinste Viewports). Slider-CTA (APP-02) deckt mobil ab.
