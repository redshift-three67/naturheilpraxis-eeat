# CHECKPOINT / Wiederherstellungspunkt – 2026-08-14

**Fixiert:** 2026-08-14 23:42 CEST  
**Direktive:** Tagesabschluss  
**Wiederherstellungspunkt (Git):** `c828af9e93e85ea7c7d0a9c373527b3a5305f8be`  
**Basis davor:** `063ebe9efb7f2e994d7dabcc3510235c74a36939`

## Git wiederherstellen

```bash
cd /home/klaus999/projects/naturheilpraxis-eeat
git fetch origin
git checkout main
git pull origin main
git log -1 --oneline
```

Nur bei Bedarf auf den Tagesabschluss-Commit hart zurück (Live-WP wird dadurch **nicht** zurückgesetzt):

```bash
git checkout main
git reset --hard origin/main
```

Live-Rollback einzelner Writes: siehe Tabelle unten (WP-Admin), nicht Git allein.

## Umgebung

| Größe | Wert |
|-------|------|
| Arbeitsordner | `/home/klaus999/projects/naturheilpraxis-eeat` |
| CDP | `127.0.0.1:9224` · `/tmp/chrome-rauch-heilpraktiker-cdp` |
| Fremd | 9223 Lovable · 9225 Sunclinic |
| Staging | aus |
| WP-User | `Redshift-Three` (Anzeige Administrator) · **kein Passwort im Repo** |
| Theme | YOOtheme |
| App | `https://naturheilpraxis-rauch.lovable.app/` |

## HFCM (nicht ohne Auftrag ändern)

| ID | Name | Ort | Status | Rollback |
|----|------|-----|--------|----------|
| 5 | Schema MedicalClinic+Physician | Header | OFF | nicht aktivieren (Duplikat) |
| 6 | Schema MedicalClinic+Physician | Header sitewide | **ON** | deaktivieren |
| 7 | Disclaimer + Autorenbox | Footer sitewide | **ON** | deaktivieren |
| 8 | Online-Anamnesebogen Button | Footer + JS-Platzierung | **ON** | deaktivieren; kanonisch `snippets/online-anamnese-footer.html` |
| 9 | SPEED-01 Slider mobil CSS | Header | **ON** | deaktivieren; `snippets/speed-slider-mobile.css` |

## Plugins / Module

| System | Stand | Rollback |
|--------|-------|----------|
| snip pro | **OFF** | Plugins → aktivieren |
| Schema & Structured Data | **OFF** | Plugins → aktivieren |
| Rank Math `seo-by-rank-math` | **ON** | nicht old/PRO-Kopien |
| Rank Math Local SEO | **OFF** | Dashboard-Modul an |
| Rank Math Sitemap | **ON** | Dashboard-Modul aus |
| noindex SEO | ON, 0/110 Regeln | — |
| Robots.txt Editor | Option auf `sitemap_index.xml`; **Live-Datei im Root unverändert** | Plesk |

## Menüs

| Menü | ID | Stand |
|------|-----|--------|
| topmenu (Footer `#nav_menu-7`) | 39 | … Kontakt · Online-Anamnesebogen · Rechtshinweise |
| Rauch HP (Navbar) | 12 | Sub nach „Praxis offen“: Online-Anamnesebogen; NLS-Label ohne Hospital; Top-Punkt **Rauch** |

## Kanonische Snippets

- `snippets/schema-medicalclinic-physician.html`
- `snippets/disclaimer-autorenbox.html`
- `snippets/online-anamnese-footer.html`
- `snippets/speed-slider-mobile.css`

## Protokolle der erfolgreichen Schritte

`archive/2026-08-14/SCHEMA-0*.md` · `META-0*.md` · `NOINDEX-01-*.md` · `APP-0*.md` · `QW-SITEMAP-SLIDER-01.md` · `SESSION-*.md`

Prewrites: `archive/2026-08-14/prewrite/`

## Offener Blocker

Plesk Document-Root: physische `robots.txt` überschreibt Plugin-Editor. Soll-Zeile:

`Sitemap: https://rauch-heilpraktiker.de/sitemap_index.xml`
