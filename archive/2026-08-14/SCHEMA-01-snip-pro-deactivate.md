# SCHEMA-01 – snip pro deaktiviert

**Datum:** 2026-08-14 21:06 CEST  
**Umgebung:** Live, Chrome CDP `127.0.0.1:9224`  
**Status:** live_verified

## Pre-Write

`archive/2026-08-14/prewrite/README-SCHEMA-01-snip-pro.md`

## Änderung (ein Schritt)

WP-Admin → Plugins → `snip pro - Strukturierte Daten`  
Datei: `rich-snippets-wordpress-plugin/rich-snippets-wordpress-plugin.php`  
**aktiv → inaktiv**

Unangetastet: Schema-Plugin (an), Rank Math (aus), HFCM (an).

Admin-Notice: „Das Plugin wurde deaktiviert.“  
Zähler: aktiv 35→34, inaktiv 11→12.

## Verifizierung

| Check | Vorher | Nachher |
|-------|--------|---------|
| Home JSON-LD | 7 | **2** |
| MedicalClinic+Physician | 1×, = Repo | 1×, = Repo |
| Home Extra (ItemList, 2. WebSite/Org, LocalBusiness) | ja | **weg** |
| Disclaimer #eeat-disclaimer-author | ja | ja |
| NLS Disclaimer + 1× Clinic/Physician | ja | ja |
| NLS zweiter Block (LocalBusiness/WebSite/Breadcrumb) | ja | ja (Schema-Plugin) |
| robots Sitemap https | ja | ja |
| Frontend visuell | — | Startseite lädt |

## Rollback

Plugins → `snip pro` → Aktivieren.

## Nächster Schritt

SCHEMA-02: `Schema & Structured Data for WP & AMP` deaktivieren.
