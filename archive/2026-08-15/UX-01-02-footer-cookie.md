# UX-01 Footer mobil + UX-02 Cookie First Screen

**Datum:** 2026-08-15  
**CDP:** `127.0.0.1:9224`  
**Status:** live_verified

## Live

Neues HFCM **#10** Header, sitewide, aktiv: `snippets/ux-mobile-footer-cookie.css`

### UX-01

`#nav_menu-7` und Parent `uk-visible@s` waren auf XS `display:none`.  
Nachher: beide `display:block`. Sichtbar: Impressum, Datenschutzerklärung, Kontakt, Online-Anamnesebogen, Rechtshinweise Therapieverfahren.

### UX-02

Cookie-Banner (The GDPR Framework / cookieconsent) auf 390×844:

| | vorher | nachher |
|--|--------|---------|
| Höhe | 190 px | 109 px |
| top | 655 | 735 |
| First Screen | H1 abgeschnitten | H1 vollständig lesbar |

Kein Auto-Accept. Nur kompakteres Padding/Schriftmaß ≤639 px.

## Rollback

HFCM #10 deaktivieren.
