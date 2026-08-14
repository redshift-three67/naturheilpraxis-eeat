# SESSION – WP-Admin Login bestätigt (CDP)

**Datum:** 2026-08-14 21:01 CEST  
**CDP:** `127.0.0.1:9224`  
**Status:** logged_in (sichtbar) – **keine Plugin-/Content-Writes**

## Login

- URL: `https://rauch-heilpraktiker.de/wp-admin/`
- Titel: `Dashboard ‹ Naturheilpraxis Rauch – WordPress`
- Admin-Bar: ja (`Willkommen, Administrator`)
- Login-Formular: nicht sichtbar
- Konto laut Auftraggeber: `Redshift-Three` (Anzeige-Name im Backend: Administrator)

Keine Zugangsdaten in diesem Archiv.

## Plugin-Stand (nur gelesen, `plugins.php`)

Zähler: alle 46 · aktiv 35 · inaktiv 11

| Plugin | Datei | Aktiv |
|--------|-------|-------|
| Header Footer Code Manager | header-footer-code-manager/… | **ja** |
| snip pro – Strukturierte Daten | rich-snippets-wordpress-plugin/… | **ja** |
| Schema & Structured Data for WP & AMP | schema-and-structured-data-for-wp/… | **ja** |
| Rank Math SEO | seo-by-rank-math/… | **nein** |
| Rank Math SEO (old copy) | seo-by-rank-math_old/… | nein |
| Rank Math SEO PRO (old) | seo-by-rank-math-pro-old/… | nein |
| noindex SEO | noindex-seo/… | **ja** |
| Async JavaScript | async-javascript/… | **ja** |
| Speed Booster Pack | speed-booster-pack/… | **ja** |
| Robots.txt Editor | robots-txt-editor/… | ja |
| 404 Solution | 404-solution/… | ja |
| WP STAGING | wp-staging/… | nein |
| Asset CleanUp | wp-asset-clean-up/… | nein |

Dashboard-Hinweis: `noindex SEO has detected that Rank Math SEO is active` – **inkonsistent** zum aktuellen Plugin-Status (Rank Math ist inaktiv).

## Bedeutung

Fehlende Frontend-`meta description` (Session-Start) passt zu **Rank Math inaktiv**. HFCM #6/#7 bleiben der aktive E-E-A-T-Träger.

## Nicht ausgeführt

- Rank Math nicht reaktiviert
- Schema-Plugins nicht deaktiviert
- Keine Metas geändert
