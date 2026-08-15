# Speed-Paket – Stand nach den Hubs

**Datum:** 2026-08-15 · Messung per curl, kein Plugin-Write

## Schon da

| Punkt | Live |
|-------|------|
| Brotli | **an** – `content-encoding: br` bei `Accept-Encoding: gzip, br` |
| gzip | an, Fallback |
| HTTP/2 | an · HTTP/3 `alt-svc` gesetzt |
| HSTS | an |
| Speed Booster / Async JS | bleiben **aus** |

Die pagespeed.de-Kachel „Brotli nein“ (13:48) war falsch oder veraltet. Live-Antwort ist Brotli.

## Offen, nicht von diesem Repo aus

TTFB weiter ~0,88 s. HTML: `cache-control: max-age=0`.  
Dieser Debian-Host (`root3091`) ist **nicht** der nginx von rauch-heilpraktiker.de. Plesk/nginx-Cache und PHP-OPcache liegen auf dem Webhost.

Kein Cache-Plugin, kein Speed Booster. TTFB = Wiedervorlage Hosting (Plesk nginx microcache / OPcache), nicht YOO-Text.
