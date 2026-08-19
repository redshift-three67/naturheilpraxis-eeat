# 06 – Offen und nicht tun

On-page E-E-A-T ist im Wesentlichen **durch**. Das Folgende ist bewusst offen oder verboten.

## Beim Betreiber (höherer Hebel als jede Seitenänderung)

| ID | Thema | Warum |
|----|--------|--------|
| GBP-PIN | Maps-Pin auf 19a | Schema hat 48.339465 / 10.948931; der sichtbare Pin muss im Unternehmensprofil sitzen |
| GBP-NAP | Name, Kategorie Heilpraktiker, Adresse 19a, Tel, URL | Local Pack |
| HOURS | Profil-Stunden = Site (Mo–Fr 10–12:30 / 13–19) | Pack zeigt bei Rauch keine Zeiten |
| NAP-SEE | Seefelder Str. 20 überall weg | Falscher Standort |
| AREA | areaServed bestätigen oder aus #6 streichen | Augsburg / Hochzoll / Friedberg |
| REVIEWS | Neutral um Bewertung bitten, keine Textvorlage | 4,9/54 schon da, Pflege |
| CITATIONS | Apple Business Connect, Bing Places = dieselbe NAP | Konsistenz |
| DL | Fünf tote `/download/…` hochladen oder Buttons entfernen | 404 → Start |
| CORONA | Menüpunkt lassen oder raus | Seite ist noindex |

## Wiedervorlage (nicht jetzt)

| ID | Thema | Bedingung |
|----|--------|-----------|
| FONT | Neue Schriftfamilie | Nach Durchsicht aller Wellen |
| REBRAND | Farbe/CI | Nach Durchsicht |
| LLMS | `/llms.txt` nur NAP + Hubs, keine Claims | Optional |
| SEM | Ads-Pilot | Nach Pin/NAP; Landings nur Start + Hubs |
| QUALI | Fortbildungen/Werdegang | Nur mit gelieferten Nachweisen |
| WV-RM | Rank-Math-Article-JSON Rohquelle | Kein Feld gefunden; DOM ist sauber |

## Explizit nicht tun

- Zweite Disclaimer-Box, Notfall-Unterseite, Glossar, Product/Service-Schema.  
- Neue Pillar `/heilpraktiker-augsburg/`.  
- Hub-Title „Heilpraktiker Augsburg“.  
- Innenstadt-Copy, Orts-Klone, Review-Stars-Markup.  
- Rank Math PRO / Yoast / Schema-Plugins wieder an.  
- Kindseiten mit Risiko-/Kosten-Blöcken flächig zupflastern.  
- BreadcrumbList ohne sichtbare Breadcrumbs.  
- Indexing API oder 64 Einzel-URLs in der Search Console anfragen.

## Search Console (Empfehlung, kein Pflicht-Schritt im Code)

Nur Start + Hubs per URL-Prüfung → Indexierung beantragen (ca. 8 URLs). Sitemap liegt. Details standen in der Session vom 17.08.; kein Ersatz für GBP.

## Dateien, die der Entwickler zuerst anfasst

| Aufgabe | Datei / Ort |
|---------|-------------|
| Disclaimer / FAQ | `snippets/disclaimer-autorenbox.html` → HFCM #7 |
| Schema | `snippets/schema-medicalclinic-physician.html` → HFCM #6 |
| Anamnese-Button / Slider-Placement | `snippets/online-anamnese-footer.html` → HFCM #8 |
| Anamnese-Seitentext | `snippets/anamnese-hub-content.html` → WP 6705 |
| Typo / Leerblöcke | `snippets/contrast-readability.css` → HFCM #11 |
| Local-Bar / Hub-Punkt | `snippets/local-action-bar.html` → HFCM #17 |
| Cluster | `snippets/kindseiten-cluster.html` → HFCM #13 |
| Live-Status | `docs/session/CURRENT.md` |
| Plan / Offen-Liste | `docs/PLAN.md` |
