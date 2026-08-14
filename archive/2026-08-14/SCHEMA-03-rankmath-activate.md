# SCHEMA-03 – Rank Math SEO aktiviert

**Datum:** 2026-08-14 21:10 CEST  
**Umgebung:** Live, Chrome CDP `127.0.0.1:9224`  
**Status:** live_verified

## Pre-Write

`archive/2026-08-14/prewrite/README-SCHEMA-03-rankmath.md`

## Änderung (ein Schritt)

WP-Admin → Plugins → **nur** `Rank Math SEO`  
Datei: `seo-by-rank-math/rank-math.php`  
**inaktiv → aktiv**

Nicht aktiviert: `seo-by-rank-math_old`, `seo-by-rank-math-pro-old`.  
Unangetastet: snip pro aus, Schema-Plugin aus, HFCM an.

Notice: „Das Plugin wurde aktiviert.“  
Zusätzlich: noindex-SEO-Konfliktwarnung (bekannt).

## Verifizierung Frontend (Cache-Bust + CDP)

| Seite | meta description | MedicalClinic | Disclaimer |
|-------|------------------|---------------|------------|
| Home | Heilpraktiker in Augsburg – Naturheilpraxis Peter Rauch… | 1× = Repo | ja |
| Kontakt | Kontakt und Termin – … Tel. +49 821 2621462. | 1× | ja |
| NLS | NLS-Diagnostik in Augsburg – sanfte Hinweisdiagnostik… | 1× | ja |
| Bioresonanz | Bioresonanztherapie Augsburg – ergaenzende… | 1× | ja |

- robots meta: `follow, index, …`
- robots.txt Sitemap: https
- JSON-LD jetzt **2**: Rank-Math-Graph + HFCM MedicalClinic+Physician

## Rank-Math-Graph (neu, nicht geändert)

`Place`, `HealthAndBeautyBusiness`+`Organization`, `WebSite`, `WebPage`/`ContactPage`, `Article`, `Person`  
Kein `LocalBusiness`-Typ mehr; Überlappung jetzt **HealthAndBeautyBusiness vs MedicalClinic**.

## Rollback

Plugins → Rank Math SEO (`seo-by-rank-math/rank-math.php`) deaktivieren.

## Nächster Schritt

SCHEMA-04: Rank-Math-Schema-Modul prüfen; `HealthAndBeautyBusiness` gegen HFCM-`MedicalClinic` konsolidieren (nur nach diesem Check, ein Write).
