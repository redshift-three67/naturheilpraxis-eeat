# SPEED-03 nach Plesk (Welle 3)

**Datum:** 2026-08-15 22:11 CEST · curl + pagespeed.de  
**URL:** https://rauch-heilpraktiker.de/

## curl (dieses Netz, kein WP-Cookie)

| | vorher | jetzt |
|---|---:|---:|
| HTML TTFB | ~0,88–0,96 s | **0,25–0,28 s** |
| Startseite 3× hintereinander | — | 0,267 / 0,266 / 0,248 s |
| WebP statisch | — | **0,017 s** |
| PHP | — | 8.2.33 · `wp-before-template` ~100 ms |

Header: `x-cache-status: MISS` · `cache-control: max-age=0` · `content-encoding: gzip` · `x-powered-by: PleskLin`.

HTML-Proxy-Cache trifft also **nicht** (immer MISS). Die Beschleunigung kommt von **schnellerem PHP/OPcache**, nicht von einem nginx-HIT.

## pagespeed.de 20:11

| | Mobil 13:48 | Mobil 20:11 | Desktop 13:49 | Desktop 20:11 |
|---|---:|---:|---:|---:|
| Note | 82 | **81** | 97 | **98** |
| LCP | 4,53 s | 4,82 s | 1,18 s | **1,10 s** |
| FCP | 1,88 s | 1,99 s | 430 ms | 447 ms |
| CLS | 0,025 | 0,049 | 0,003 | 0,015 |
| TBT | 29 ms | 42 ms | 0 ms | 0 ms |
| TTFB | 961 ms | **255 ms** | 854 ms | **244 ms** |

Tool-Kachel TTFB **270 ms** (Mobil und Desktop). Ziel &lt; 400 ms: **erreicht**.

Mobil-Note/LCP unverändert im Rauschen: Bremse ist jetzt **render-blocking CSS/JS (~1,07 s)**, nicht mehr der Server.

Roh: `prewrite/pagespeed-mobile-2211.html` · `pagespeed-desktop-2211.html`
