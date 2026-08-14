# SCHEMA-04 – Rank Math Modul Lokales SEO aus

**Datum:** 2026-08-14 21:19 CEST  
**Umgebung:** Live, Chrome CDP `127.0.0.1:9224`  
**Status:** live_verified

## Pre-Write

`archive/2026-08-14/prewrite/README-SCHEMA-04-local-seo.md`

## Änderung (ein Schritt)

Rank Math Dashboard → Modules → **Lokales SEO** Toggle **an → aus**  
Plugin Rank Math SEO bleibt **aktiv**.  
Anderes Modul unverändert (u. a. Schema/Titel/Analysen bleiben an).

Auftrag: MedicalClinic (HFCM) bleibt; konkurrierendes Local-Schema fällt weg.

## Verifizierung

| Check | Vorher | Nachher |
|-------|--------|---------|
| HealthAndBeautyBusiness | ja | **nein** |
| LocalBusiness | — | nein |
| openingHours (RM Local) | ja | **nein** |
| MedicalClinic+Physician | 1× = Repo | 1× = Repo |
| Rank-Math-Restgraph | Place + HealthAndBeautyBusiness… | Organization, WebSite, WebPage/Article, Person |
| Meta description Home/NLS/Kontakt | da | da |
| robots `follow, index` | da | da |
| Disclaimer | da | da |
| robots.txt Sitemap https | da | da |

## Rollback

Rank Math Dashboard → Modul **Lokales SEO** wieder aktivieren.

## Hinweis

Rank-Math-Modul „Sitemap“ war bereits aus (nicht in diesem Schritt geändert). Sitemap-URL in robots.txt bleibt über Robots.txt Editor.
