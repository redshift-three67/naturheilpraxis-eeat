# pagespeed.de – rauch-heilpraktiker.de Startseite

**Quelle:** https://www.pagespeed.de/ · 15.08.2026 13:05/13:06 Uhr · Lighthouse wie PSI  
**URL:** https://rauch-heilpraktiker.de/  
Google-PSI-API in dieser Session 429 (Tageslimit) – Messung daher über pagespeed.de.

## Mobil (Hauptwert für Google)

| Messwert | Ergebnis | Bewertung |
|----------|----------|-----------|
| Performance | **79 / 100** | OK |
| LCP | 4,91 s | schlecht (Ziel < 2,5 s) |
| FCP | 2,17 s | mittel |
| CLS | 0,035 | gut |
| TBT | 4 ms | gut |
| Speed Index | 3,21 s | gut |
| TTFB | 941 ms | mittel |

Größte Hebel: Render-blocking CSS/JS (~1,24 s), Server-Antwort ~940 ms, ungenutztes JS/CSS, Bildgrößen.

## Desktop

| Messwert | Ergebnis | Bewertung |
|----------|----------|-----------|
| Performance | **97 / 100** | sehr gut |
| LCP | 1,22 s | gut |
| FCP | 446 ms | gut |
| CLS | 0,003 | gut |
| TBT | 0 ms | gut |
| TTFB | 867 ms | mittel |

## Server (Tool)

HTTP/2 (HTTP/3 verfügbar) · HSTS ja · IPv6 ja · Brotli nein · TTFB ~0,9 s. TLS-Kachel im Tool ohne Wert (Live-HTTPS/HSTS ist gesetzt).

## Interpretation

Mobil **79** ist kein Alarm, aber auch kein grünes Licht. Google rechnet vor allem mobil. Die Note wird vom **LCP 4,91 s** gezogen: der erste große sichtbare Inhalt (Slider/Hero) kommt zu spät. Interaktivität (TBT 4 ms) und Layout-Sprünge (CLS 0,035) sind unauffällig – die Seite wirkt nach dem Laden ruhig, sie **startet** nur langsam.

Zwei getrennte Bremsen:

1. **Server ~0,9 s (TTFB)** – bevor CSS/JS überhaupt fließen. Das ist Hosting/PHP/Cache, nicht YOO-Text.
2. **Render-blocking ~1,24 s** – Theme-CSS, jQuery, Cookie-Script, UIkit. Speed Booster Pack und Async JavaScript sind bereits **aus** (Konfliktvermeidung). Zusätzliche Speed-Plugins nicht einschalten, solange Schema/HFCM die Referenz sind.

Desktop **97 / LCP 1,22 s** zeigt: Inhalt und Bilder sind nicht grundsätzlich zu schwer. Das Mobil-Problem ist First Screen + Server, nicht „die ganze Site ist langsam“.

Was **nicht** der nächste Hub-Schritt ist: Brotli an (Plesk/nginx), HTML-Cache/TTFB, kritisches CSS, Offscreen-Folien wirklich lazy. Das bleibt ein eigenes Speed-Paket nach den Hubs.

Bereits erledigt und in dieser Messung schon enthalten: Kenburns mobil aus, Slider-Höhe reduziert, LCP-Bild `eager`/`high`, WebP über YOO-Cache.
