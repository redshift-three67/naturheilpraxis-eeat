# Plugin-Konfliktanalyse (Live) – 2026-08-14

## Kritisch / kontraproduktiv für E-E-A-T & SEO-Plan

| Plugin | Status | Risiko |
|--------|--------|--------|
| **Schema & Structured Data for WP & AMP** | ON | Doppelte/konkurrierende JSON-LD mit HFCM-Schema und Rank Math |
| **snip pro – Strukturierte Daten** | ON | Weitere Schema-Quelle → Risiko ungültiger/mehrfacher Graphen |
| **noindex SEO** | ON | Warnt vor Rank Math-Konflikt; kann Seiten noindexen |
| **Rank Math SEO PRO (old)** | off | Veraltet – deinstallieren, nicht aktivieren |
| **404 Solution** | ON | Hatte Staging-REST gestört; Redirect-Risiko prüfen |
| **Speed Booster Pack** + **Async JavaScript** | ON | Kann Rank Math/Schema-Scripts verzögern oder brechen |

## Unkritisch / nützlich

- Header Footer Code Manager (unser Schema)
- Robots.txt Editor
- Duplicator / Updraft / WPvivid (Backup)
- ShortPixel, PB SEO Friendly Images
- ACF, Disable Comments

## Empfehlungen (Freigabe nötig)

1. **Ein Schema-System wählen:** HFCM-E-E-A-T-Block behalten **oder** Rank Math Schema **oder** Schema-Plugin – nicht alle parallel.
2. **snip pro** und **Schema & Structured Data** perspektivisch deaktivieren, wenn Rank Math + HFCM reichen.
3. **noindex SEO** Optionen prüfen (keine wichtigen URLs noindex).
4. Rank Math PRO old deinstallieren.
5. Speed-Plugins nach Meta/Schema-Final kurz testen (View-Source).
