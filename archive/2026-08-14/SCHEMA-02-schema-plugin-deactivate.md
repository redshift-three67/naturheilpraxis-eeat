# SCHEMA-02 – Schema & Structured Data deaktiviert

**Datum:** 2026-08-14 21:09 CEST  
**Umgebung:** Live, Chrome CDP `127.0.0.1:9224`  
**Status:** live_verified

## Pre-Write

`archive/2026-08-14/prewrite/README-SCHEMA-02-schema-plugin.md`

## Änderung (ein Schritt)

WP-Admin → Plugins → `Schema & Structured Data for WP & AMP`  
Datei: `schema-and-structured-data-for-wp/structured-data-for-wp.php`  
**aktiv → inaktiv**

Erster Klick auf „Deaktivieren“ wurde von einem offenen 404-Solution-Dialog (`abj404-uninstall-dialog`) abgefangen (kein Zustandswechsel). Zweiter Versuch: Deaktivieren-URL aus dem Admin-Link (Nonce), danach Notice „Das Plugin wurde deaktiviert.“

Unangetastet: snip pro (aus), Rank Math (aus), HFCM (an).

## Verifizierung

| Check | Nach SCHEMA-01 | Nach SCHEMA-02 |
|-------|----------------|----------------|
| Home JSON-LD | 2 | **1** (nur HFCM) |
| NLS / Kontakt JSON-LD | 2 / 2 | **1 / 1** |
| MedicalClinic+Physician | 1× = Repo | 1× = Repo |
| LocalBusiness / extra WebSite | noch auf NLS | **weg** |
| Disclaimer | ja | ja |
| robots Sitemap https | ja | ja |

## Rollback

Plugins → `Schema & Structured Data for WP & AMP` → Aktivieren.

## Nächster Schritt

SCHEMA-03: Rank Math SEO (`seo-by-rank-math/rank-math.php`) aktivieren – **nicht** die `_old`/`PRO-old`-Kopien.
