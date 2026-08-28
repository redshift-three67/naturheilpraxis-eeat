# Live-Analyse 2026-08-28 – rauch-heilpraktiker.de

**Analysestand:** 2026-08-28, ca. 23:40 MESZ
**Repo:** `main` `2766b06`, Working Tree sauber, synchron mit GitHub (vorher mit `git fetch` geprüft)
**Methode:** Öffentliches Frontend über HTTP (Start, 5 Hubs, Kinderseiten, Legal, Downloadbereich), HTTP-Header, robots.txt, sitemap_index.xml, Redirect-Verhalten, Kompression/TTFB, JSON-LD-Struktur-Parst. Das ist exakt die Sicht, die Google hat.
**Nicht prüfbar von außen:** Search Console, Local-Pack-Screens, CrUX-Feldwerte, PageSpeed-API (anonymes Tageskontingent erschöpft; letzte gültige Messung 17.08.: Mobil 81 / Desktop 98).
**Charakter dieser Datei:** Analyse + Wiedervorlage. **Keine** Site-Writes damit ausgelöst. Phase bleibt **PAUSE / Messung** laut `docs/STATUS.md`.

---

## 1 Bestätigt live (Repo-Stand = Live-Stand)

Alle nachfolgenden Punkte wurden am 28.08. am öffentlichen Frontend nachgewiesen, nicht nur der Doku geglaubt:

| Prüfung | Befund live |
|---------|-------------|
| Title Start | `Heilpraktiker Augsburg - Naturheilpraxis Peter Rauch` |
| H1 Start | `Heilpraktiker Augsburg – Naturheilpraxis Peter Rauch` (1×) |
| Meta Description Start | vorhanden, YMYL-sauber („Heilpraktiker in Augsburg-Hochzoll – …") |
| robots-Meta | `follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large` |
| Canonical | korrekt auf Start und Unterseiten (auch bei Großschreibungs-Aufruf: lowercase) |
| JSON-LD gesamt | genau **4 Blöcke**: ① HFCM #6 `@graph` MedicalClinic + Physician (Geo 48.339465/10.948931, 2× OpeningHours Mo–Fr, areaServed Augsburg/Hochzoll/Friedberg) ② HFCM #7 FAQPage mit 6 Question/Answer ③ Rank Math `@graph` Organization, WebSite+SearchAction, WebPage, Article, Person, 2× ImageObject |
| Verbotene Schema-Typen | **kein** LocalBusiness, **kein** HealthAndBeautyBusiness, **kein** Product/Service, **kein** zweites MedicalClinic (#5 OFF wirksam) |
| FAQ | 6 sichtbare Karten (`eeat-faq-item`) + FAQPage JSON-LD mit identischem Wortlaut |
| robots.txt | Sitemap-Zeile `https://rauch-heilpraktiker.de/sitemap_index.xml` |
| Sitemap | 64 URLs, alle https, Rank Math generiert |
| Redirects | www→non-www 301, http→https 301, `/bioresonanz-versus-elektroakupunktur/`→`/bioresonanz-und-elektroakupunktur/` 301, `/download/…` → 301 auf Start (kein 404 mehr) |
| Corona | `/corona-praxis-offen/` = `follow, noindex` |
| LCP | `#eeat-lcp-preload` mit `fetchpriority="high"`, imagesrcset 768w–1894w, sizes 100vw live (HFCM #9) |
| Kompression/Speed | Brotli aktiv (`Content-Encoding: br`), **TTFB ~105 ms** (besser als die dokumentierten 255 ms vom 15.08.) |
| Anamnese-Fluss | Hub `/online-anamnesebogen/` Title/H1 „… in Augsburg", Button mit `eeat-anamnese-app-link` → Lovable-App; Kontakt-Satz (#12) live |
| Local-Bar / Typo | `eeat-local-bar` auf Start, `eeat-type-a`-Skala aktiv |
| Cluster | `eeat-cluster`-Nav auf Kindseiten (Stichprobe `/klassische-homoeopathie/`: Title + H1 + Cluster korrekt) |
| Hub-Titles | `NLS-Diagnostik in Augsburg …`, `Schmerztherapie Augsburg …`, `Bioresonanz und Elektroakupunktur in Augsburg …` – alle ohne Pillar-Konkurrenz |
| NAP Impressum | Friedrich-Deffner-Str. 19a + 0821 2621462, konsistent zu #6/#7 |

**Urteil:** Phasen 0–14 sind live und reproduzierbar verifiziert. Es gibt **keinen** Widerspruch zwischen `docs/STATUS.md` und dem, was Google heute abruft.

---

## 2 Neue Befunde (so noch nicht im Repo)

| ID | Befund (28.08. live) | Bewertung | Lösungsweg |
|----|----------------------|-----------|------------|
| **OGA** | `og:image:alt` = „Naturheilpraxis_Heilpraktiker_**Sanft_Heilen**_Stark_im_Leben" | Crawler-lesbares Meta mit dem eingestellten Slogan – widerspricht der Sprachregel „Sanft Heilen raus" (betrifft Share-Preview und Snippet-Verarbeitung). Klein, aber echt. | Rank Math → Social/OG der Startseite: Bild-Alt-Text setzen (z. B. „Naturheilpraxis Rauch – Heilpraktiker Augsburg"). Ein Write. |
| **WVRM2** | Rank-Math-Article-JSON (roh, im Quelltext): description = „Naturheilpraxis **für sanfte, ganzheitliche Medizin**. … NLS **Diagnose** …" | Bestätigt WV-RM: der DOM-Fix (#15) erfasst nur sichtbaren Text, **nicht** das rohe JSON, das Google mitliest. Encodierung selbst ist korrekt (UTF-8). | Entweder Rank-Math-Description-Feld der Startseite auf den YMYL-Text setzen (überschreibt auch die Article-description) oder PHP-Filter. Erst prüfen, dann ein Write. |
| **ODP** | Zweites Preload live: `section-dark-background.svg` mit `data-od-added-tag`, `media="(width <= 782px)"` | CURRENT #84 notierte „OD-SVG-Preload wird entfernt" – ist **nicht** geschehen. `data-od-added-tag` stammt vom Plugin „Optimization Detective" – in keiner Plugin-Liste des Handoffs dokumentiert. | Plugin-Liste prüfen (CDP/Admin). Entweder Plugin in die Doku aufnehmen (dann Verhalten akzeptieren) oder deaktivieren. Ein Write bzw. Dokupflege. |
| **UCASE** | `/NLS-DIAGNOSTIK/` liefert 200 (statt 301), aber mit korrektem lowercase-Canonical | Google konsolidiert über Canonical; Risiko minimal. Reinheit: 301 wäre sauberer. | Optional: Redirect-Regel (nginx/Plesk oder 404-Solution-Muster). Niedrige Priorität. |
| **LOV2** | Start-Roh-HTML enthält 2 direkte `lovable.app`-Anker; erst der Client-JS-Remap (#8/#10) biegt sie auf den Hub | Bekannter Kompromiss des HFCM-Ansatzes: ohne JS geht der Klick direkt in die App. Funktioniert, ist aber nicht „Quelle der Wahrheit". | Dauerhaft: die 2 Anker im YOO-Layout selbst umstellen. 1 YOO-Write, mittlere Priorität. |
| **IMGNAME** | Bilddateinamen enthalten `Sanft-Heilen-Stark-im-Leben-….jpeg`; Alt-Texte sind bereinigt | Nur Dateipfad, kein sichtbarer Text, kein Ranking-Signal. Umbenennung = URL-Churn ohne Nutzen. | **Keine Aktion.** Nur notiert, damit niemand es „aufräumt". |
| **TTFB+** | TTFB ~105 ms (28.08., Plesk + Super Cache + Brotli) | Besser als die 255 ms aus SPEED-03. Nichts zu tun. | Messwert im Archiv halten. |
| **GAP-AUTOR** | Sitemap: **keine** Autor-/Werdegang-/Praxis-Seite. Peter Rauch existiert nur als Autorenbox (#7), Person- und Physician-Knoten | Größter verbleibender E-E-A-T-Hebel (Experience/Autorität der Person bei YMYL). Bewusst blocked an **QUALI** (Fortbildungen nur mit Nachweisen). | Erst Nachweise vom Betreiber, dann **eine** Seite „Praxis / Peter Rauch" (Werdegang, Schwerpunkte, Fortbildungen mit Beleg) und Verlinkung aus #7. Kein Glossar, kein Blog. |

---

## 3 Position im Markt (letzter harter Stand: SERP 17.08.)

- **Local Pack „heilpraktiker augsburg":** Platz 3 mit 4,9/54 – hinter Palat (4,9/19) und soomia (5,0/41). Damals ohne Zeiten-„Geöffnet"-Chip; GBP 19.08. soll das ändern → **unverifiziert bis die Pack-Screens kommen** (GSC-PACK).
- **Organisch Seite 1:** Rauch nicht vertreten (Polinacea, Doctolib, Gaigl, Prüfer, Arendt …). Erwartbar und akzeptiert: die Startseite ist die Pillar, es gibt bewusst keine zweite „Heilpraktiker Augsburg"-URL.
- **Einordnung:** On-page ist der Hebel weitgehend ausgereizt; die verbleibenden Ranking-Hebel liegen **außerhalb** der Site: Pack-Zeiten sichtbar?, Reviews-Zuwachs, Citations, Autoren-Tiefe, ggf. Ads.

## 4 Reifegrad nach Dimensionen (28.08.)

| Dimension | Stand | Verbleibende Lücke |
|-----------|-------|--------------------|
| Technik/Indexierung | ~95 % | ODP (Preload/Plugin), UCASE (optional) |
| Schema/Trust | ~90 % | WVRM2 (rohes Article-JSON), OGA (og:image:alt); optional `sameAs`/Logo am Person-/Clinic-Knoten sobald Profile existieren |
| Inhalt/Struktur | ~85 % | Cluster + Hubs + Kindseiten stehen; fehlt nur Autor-/Werdegang-Tiefe (GAP-AUTOR, blocked an QUALI) |
| Lokal/GBP | Profil gesetzt 19.08. | Wirkung unbewiesen → Pack-Screens; REVIEWS-Zuwachs; Apple/Bing (CITATIONS) |
| Speed/UX | gut (TTFB ~105 ms, LCP-Preload, Mobil 81/98 vom 17.08.) | CrUX-Feldwerte beobachten; nichts planen |
| Messung/Steuerung | **0 % seit 20.08.** | GSC-PACK ist der definierte nächste Schritt – ohne Daten keine weitere Welle |

## 5 Roadmap (priorisiert, respektiert „PAUSE / Messung")

1. **Stufe 0 – läuft:** Betreiber liefert GSC-28-Tage + 2 Pack-Screens `heilpraktiker augsburg` → Auswertung → erst dann Ads-Ja/Nein oder gezielter Fix. (unverändert, `docs/STATUS.md`)
2. **Stufe 1 – Mini-Welle „Hygiene 28.08." (4 kleine Writes, je Prewrite→Verify→Archiv, nur HFCM/Rank Math):**
   - OGA: og:image:alt der Startseite setzen
   - WVRM2: Article-/Meta-Description der Startseite auf YMYL-Text, rohes JSON sauber
   - ODP: Optimization-Detective-Preload klären (Plugin dokumentieren oder aus)
   - UCASE: optional 301 Groß-/Kleinschreibung
   - **Freigabe nötig**, da Phase PAUSE gilt.
3. **Stufe 2 – Betreiber-Hebel (kein Site-Write):** neutraler Reviews-Prozess, Apple Business Connect + Bing Places mit identischer NAP, echte PDFs für `/download/…` (aktuell 301 auf Start = Sackgasse) oder Buttons entfernen, Corona-Menü-Entscheid.
4. **Stufe 3 – nach Nachweisen (QUALI):** eine Autor-/Werdegang-Seite + Verlinkung aus #7; optional `sameAs`/Logo in #6; danach optional `/llms.txt` (nur NAP + Hubs); FONT/REBRAND erst ganz am Ende.
5. **Stufe 4 – messen, dann Ads:** Such-Ads-Pilot nur Start + Hubs, echte Geo-Grenzen, keine Heilzusagen – nur wenn Stufe 0 es trägt.

## 6 Ausführungsweg für Stufe 1 (wenn freigegeben)

- Workspace: weiterhin **CDP `127.0.0.1:9224` auf dem Debian-Server** (dort, wo WP-Admin eingeloggt ist) – der Port ist von dieser Windows-Maschine aus nicht erreichbar. Alternativ WP-Admin-Zugang + strikte Einhaltung von `docs/WORKFLOW.md` (Prewrite → ein Schritt → Verify → Archiv → Push).
- OGA/WVRM2 laufen über Rank-Math-Felder, ODP über Plugins, UCASE über Redirect-Ebene – kein YOO-Layout, kein Disclaimer, kein Schema-Kern wird angefasst.
