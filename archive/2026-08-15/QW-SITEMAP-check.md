# QW-SITEMAP – Live-Check 2026-08-15 09:28 CEST

**Status:** noch nicht erfüllt

## robots.txt

Physische Root-Datei (nginx `last-modified: Fri, 14 Aug 2026 11:14:11 GMT`, `max-age=31536000`).

Live-Zeile unverändert:

`Sitemap: https://rauch-heilpraktiker.de/sitemap.xml`

## Vergleich

| | `sitemap.xml` (statisch, 2023) | `sitemap_index.xml` (Rank Math) |
|--|-------------------------------|----------------------------------|
| HTTP | 200, last-modified 2024-05-29 | 200 dynamisch |
| URLs | 53 | 64 (`page-sitemap.xml`) |
| Extra in RM | — | u. a. BIT, EAV, Diagnostik-Seiten |

Die statische Datei ist eine echte Teilmenge. Google sieht die 11 neueren URLs nicht, solange robots auf `sitemap.xml` zeigt.

**Auftraggeber:** Plesk File Manager → Document-Root → `robots.txt` nur letzte Zeile auf  
`Sitemap: https://rauch-heilpraktiker.de/sitemap_index.xml`
