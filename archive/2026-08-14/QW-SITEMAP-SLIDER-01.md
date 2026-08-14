# QW-SITEMAP + SLIDER-01

**Datum:** 2026-08-14 23:27 CEST  
**CDP:** `127.0.0.1:9224`

## QW-SITEMAP – teilweise live

**Erledigt**

- Rank Math Modul **Sitemap ON**
- `https://rauch-heilpraktiker.de/sitemap_index.xml` HTTP 200 (Rank Math, 63 Seiten-URLs)
- `page-sitemap.xml` HTTP 200

**Wiedervorlage (nicht still umgangen)**

Live-`robots.txt` wird von einer **physischen Datei im Webroot** ausgeliefert (`last-modified` Datei, nginx).  
Plugin- und Rank-Math-Editor speichern, greifen aber nicht: *„Der Inhalt ist gesperrt, weil sich im Stammordner eine robots.txt-Datei befindet.“*

Live bleibt: `Sitemap: https://rauch-heilpraktiker.de/sitemap.xml` (statisch 2024).  
Admin-Option steht auf `sitemap_index.xml` (https).

**Auftraggeber:** In Plesk die Datei `robots.txt` im Document-Root ändern oder löschen, Zeile  
`Sitemap: https://rauch-heilpraktiker.de/sitemap_index.xml`  
Danach TQW-01 (https) bleibt erfüllt.

**Rollback Modul:** Rank Math Dashboard → Sitemap aus.

## SLIDER-01 – live_verified

| Folie | Nachher |
|-------|---------|
| 0 | Untertitel `Naturheilkundliche Verfahren in Augsburg` · CTA NLS unverändert |
| 2 | CTA-Ziel **`/psychotherapie-augsburg/`** (vorher Hypnotherapie) |
| 3 | Untertitel wie Folie 0 · CTA BIT unverändert |

4 Folien intakt. Disclaimer + Schema + Anamnese-Button unverändert.  
Restliches „Sanft Heilen“ nur noch im **Bild-Alt** einer Datei.

**Rollback:** YOOtheme Slider-Untertitel/Links zurück.
