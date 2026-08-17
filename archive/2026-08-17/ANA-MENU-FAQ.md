# ANA-MENU-FAQ – Menü auf Hub, FAQ-Struktur, Hub-Slider

**Datum:** 2026-08-17  
**CDP:** `127.0.0.1:9224`  
**Status:** live_verified

## Pre-Write

`archive/2026-08-17/prewrite/ana-menu12-before.json`  
`archive/2026-08-17/prewrite/ana-menu39-before.json`  
`archive/2026-08-17/prewrite/ana-hfcm7-before.html`  
`archive/2026-08-17/prewrite/ana-hfcm8-before.html`  
`archive/2026-08-17/prewrite/ana-hfcm8-remap-before.html`  
`archive/2026-08-17/prewrite/ana-hfcm10-before.html`  
`archive/2026-08-17/prewrite/ana-hfcm12-before.html`  
`archive/2026-08-17/prewrite/ana-hfcm14-before.html`  
`archive/2026-08-17/prewrite/ana-hub-content-before.json`

## Änderung

1. **Menü** `Rauch HP` (12, Eintrag 6480) und `topmenu` (39, Eintrag 6476):  
   `https://naturheilpraxis-rauch.lovable.app/` → `https://rauch-heilpraktiker.de/online-anamnesebogen/` · `_blank` aus.
2. **HFCM #8:** Start-/PE-Buttons und Slider-/Ablauf-Links auf den Hub; App-Link nur auf der Hub-Seite (`eeat-anamnese-app-link`).
3. **HFCM #10 / #12 / #14:** Header/Footer-Nav, Kontakt-Satz, Download-Remap auf den Hub.
4. **HFCM #7:** FAQ als nummerierte Karten (01–06), H2, Lead, sichtbare Antworten; FAQPage-JSON-LD analog; ein Disclaimer.
5. **Seite 6705:** passender 2-Folien-Slider (Praxisbilder, Overlay wie die anderen Hubs), danach Text + App-Button.

## Verifizierung

- Header, Mobile-Menü, Footer, Start-CTA, Kontakt-Satz: Hub-URL, kein Lovable.
- Hub: Slider 320 / 240 px, Overlay „Online-Anamnesebogen / Patientenaufnahme vor dem Termin“.
- Hub-Button `Zum Online-Anamnesebogen` → Lovable, neues Fenster.
- Start: 0 Lovable-Anker nach Remap.
- FAQ: 6 sichtbare Items, 6 JSON-LD-Fragen, 1× `#eeat-disclaimer-author`.

## Rollback

Menüs 12/39 URL wieder auf Lovable; HFCM 7/8/10/12/14 aus den `ana-hfcm*-before.html`; Seite 6705 aus `ana-hub-content-before.json`.
