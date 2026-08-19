# 06 – Offen und nicht tun

On-page E-E-A-T ist im Wesentlichen **durch**. Das Folgende ist bewusst offen oder verboten.

## GBP (19.08. erledigt)

Pin 19a, Zeiten, Einzugsgebiet (nicht nur Friedberg), Hauptkategorie Heilpraktiker, Neben Naturheilpraktiker, Attribute wahr / keine Notfallhilfe. Kein Seefelder-Duplikat. Siehe `07-google-business.md`.

## Beim Betreiber (kein Blocker)

| ID | Thema | Warum |
|----|--------|--------|
| REVIEWS | Neutral um Bewertung bitten, keine Textvorlage | 4,9/54 schon da, Pflege |
| CITATIONS | Apple Business Connect, Bing Places = dieselbe NAP | Konsistenz |
| DL | Fünf tote `/download/…` hochladen oder Buttons entfernen | 404 → Start |
| CORONA | Menüpunkt lassen oder raus | Seite ist noindex |
| AREA-SCHEMA | areaServed in HFCM #6 nur anfassen, wenn GBP-Umkreis abweicht | Site und Profil sollen gleich bleiben |

## Wiedervorlage (nicht jetzt)

| ID | Thema | Bedingung |
|----|--------|-----------|
| FONT | Neue Schriftfamilie | **Kein E-E-A-T-Rest.** Nur optisches Rebrand, bewusst nicht in der Serie |
| REBRAND | Farbe/CI | Nach Durchsicht |
| LLMS | `/llms.txt` nur NAP + Hubs, keine Claims | Optional |
| SEM | Ads-Pilot Search, Start+Hubs | Nach 1–2 Wochen Pack-Check; siehe `08-uebertragbare-erkenntnisse.md` |
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
