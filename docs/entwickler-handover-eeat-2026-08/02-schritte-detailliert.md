# 02 – Schritte detailliert

Jeder Eintrag ist live gegangen und in `archive/YYYY-MM-DD/` dokumentiert. Spalte **Archiv** = Einstieg für den Nachvollzug (Prewrite liegt daneben unter `prewrite/`).

Legende Ort: **HFCM** = Header Footer Code Manager · **RM** = Rank Math · **YOO** = YOOtheme-Builder · **WP** = Kern/Menü/Seite · **Plesk** = Hosting.

---

## Phase 0 – Fundament (14.08.2026)

| ID | Schritt | Ort | Was ein Entwickler wissen muss | Archiv |
|----|---------|-----|--------------------------------|--------|
| SESSION-CDP | Chrome CDP Live | Server | Port **9224** exklusiv, Profil `/tmp/chrome-rauch-heilpraktiker-cdp` | `archive/2026-08-14/SESSION-START-CDP.md` |
| SESSION-LOGIN | WP-Admin | WP | Konto `Redshift-Three`, Anzeige Administrator | `archive/2026-08-14/SESSION-ADMIN-LOGIN.md` |
| CHECKPOINT | Restore-Punkt | Repo | Ausgang vor den Wellen | `archive/2026-08-14/CHECKPOINT-2026-08-14.md` |
| TQW-01 | robots Sitemap https | Plesk / robots | Zuerst `sitemap.xml`, später `sitemap_index.xml` (64 https-URLs) | `archive/2026-08-14/` + `2026-08-15/QW-SITEMAP-done.md` |

---

## Phase 1 – Schema und Trust-Kern (14.08.2026)

| ID | Schritt | Ort | Was ein Entwickler wissen muss | Archiv |
|----|---------|-----|--------------------------------|--------|
| SCHEMA-01 | snip pro aus | WP-Plugins | Dritte Schema-Quelle entfernt | `archive/2026-08-14/SCHEMA-01-snip-pro-deactivate.md` |
| SCHEMA-02 | Schema-Plugin aus | WP-Plugins | „Schema & Structured Data for WP & AMP“ aus | `archive/2026-08-14/SCHEMA-02-schema-plugin-deactivate.md` |
| SCHEMA-03 | Rank Math an | WP-Plugins | Nur `seo-by-rank-math/`. Old/PRO bleiben aus | `archive/2026-08-14/SCHEMA-03-rankmath-activate.md` |
| SCHEMA-04 | Lokales SEO aus | Rank Math Module | Kein HealthAndBeautyBusiness / LocalBusiness mehr | `archive/2026-08-14/SCHEMA-04-local-seo-off.md` |
| TQW-02 | MedicalClinic + Physician | HFCM **#6** Header | Ein `@graph`. Kanonisch `snippets/schema-medicalclinic-physician.html`. #5 bleibt OFF (Duplikat) | `archive/2026-08-14/TQW-02-schema-medicalclinic-physician.md` |
| TQW-04 | Disclaimer + Autorenbox | HFCM **#7** Footer | Sitewide. Einziger Disclaimer. NAP + FAQ später erweitert | `archive/2026-08-14/TQW-04-disclaimer-autorenbox.md` |
| TQW-03 | Meta Descriptions | RM | Frontend-Metas wieder sichtbar | `archive/2026-08-14/TQW-03-rankmath-meta-descriptions.md` |

Strategie: `docs/SCHEMA-STRATEGY.md`. Sichtbares Fachschema **nur** HFCM #6. Rank Math darf Organization/WebSite/WebPage/Person liefern.

---

## Phase 2 – Meta, Robots, Index (14.08.2026)

| ID | Schritt | Ort | Was ein Entwickler wissen muss | Archiv |
|----|---------|-----|--------------------------------|--------|
| META-01 | NLS-Titel | RM | Ohne Werbe-/Hospital-Claim im Title | `archive/2026-08-14/META-01-nls-title.md` |
| NOINDEX-01 | EAV + BIT wieder index | RM / noindex-Plugin | Wichtige Verfahrensseiten nicht noindex | `archive/2026-08-14/NOINDEX-01-eav-bit-index.md` |
| META-02 | Umlaute + BIT-Titel | RM | Korrekte UTF-8-Titles | `archive/2026-08-14/META-02-umlaute.md` |
| META-03 | NLS-Keywords | RM | Ohne Heilclaim | `archive/2026-08-14/META-03-nls-keywords.md` |
| META-04 | YMYL-Titel | RM | Wahr, ohne Superlativ | `archive/2026-08-14/META-04-ymyl-titles.md` |
| META-05 | 8 Werbetitel | RM | Restliche Claim-Titles | `archive/2026-08-14/META-05-werbetitel.md` |
| META-06 | 5 Claim-/ASCII-Metas | RM | Descriptions bereinigt | `archive/2026-08-14/META-06-metas.md` |
| QW-SITEMAP | robots auf sitemap_index | Plesk | 64 https-URLs | `archive/2026-08-15/QW-SITEMAP-done.md` |
| QW-NOINDEX | noindex-SEO-Plugin aus | WP-Plugins | 0/110 Optionen an; nur Konflikt-Warnung war übrig | CURRENT #66 |

---

## Phase 3 – Online-Anamnese (14.–17.08.2026)

Frühe Schritte zeigten noch direkt auf Lovable. **Endstand 17.08.:** Menü und interne Links → Hub; App nur vom Hub.

| ID | Schritt | Ort | Was ein Entwickler wissen muss | Archiv |
|----|---------|-----|--------------------------------|--------|
| APP-01 | Footer-Link | WP-Menü **topmenu 39** | Zuerst Custom-Link auf Lovable; 17.08. auf Hub umgestellt | `archive/2026-08-14/APP-01-footer-anamnese.md` |
| APP-02 | Button sichtbar | HFCM **#8** | `snippets/online-anamnese-footer.html` | `archive/2026-08-14/APP-02-anamnese-sichtbar.md` |
| APP-03/04 | Menüplatz | WP-Menü **12** Rauch HP + 39 | Eintrag nach „Praxis offen“ bzw. nach Kontakt | `archive/2026-08-14/APP-03-04-anamnese-plaetze.md` |
| APP-05 | Button-Stil | HFCM #8 | Unter „Jetzt Termin buchen“ | `archive/2026-08-14/APP-05-SPEED-01-QW-METATRON.md` |
| APP-06 | Rahmen + PE-Breite | HFCM #8 | Rahmen `#8ec760`, Breite an ProvenExpert | `archive/2026-08-15/APP-06-anamnese-rahmen.md` |
| APP-07 | Home-Slider-Folie | YOO | Folie 1: Anamnese; CTA später Hub statt Lovable | `archive/2026-08-15/APP-07-slider-anamnese.md` |
| KONTAKT | Satz auf /kontakt/ | HFCM **#12** | Endstand: Link zum Hub | `snippets/kontakt-anamnese-satz.html` |
| WELLE-B-e2 | Seite 6705 | WP | `/online-anamnesebogen/`, Title „… in Augsburg \| Naturheilpraxis Rauch“ | `archive/2026-08-17/PLAN-WELLE-B.md` |
| ANA-MENU | Menü 12 + 39 auf Hub | WP | `target=_blank` aus. App-Klasse `eeat-anamnese-app-link` nur auf dem Hub | `archive/2026-08-17/ANA-MENU-FAQ.md` |

App-URL (nur Hub-Button): `https://naturheilpraxis-rauch.lovable.app/`

---

## Phase 4 – Speed und Mobil-UX Basis (14.–15.08.2026)

| ID | Schritt | Ort | Was ein Entwickler wissen muss | Archiv |
|----|---------|-----|--------------------------------|--------|
| SPEED-01 | Kenburns mobil aus, Höhe runter | HFCM **#9** / YOO | `snippets/speed-slider-mobile.css` | `archive/2026-08-14/APP-05-SPEED-01-QW-METATRON.md` |
| SPEED-02 | Folien WebP, LCP eager/high | HFCM #9 | Erstes Bild `src` + `eager` + `high` | `archive/2026-08-15/SPEED-02-webp-lcp.md` |
| UX-01 | Footer-Legal auf XS | HFCM **#10** | Vorher `uk-visible@s` versteckte Legal | `archive/2026-08-15/UX-01-02-footer-cookie.md` |
| UX-02 | Cookie-Banner Höhe | HFCM #10 | Mobil ~109 px statt ~190 | dasselbe |
| QW-MENU-METATRON | NLS-Menülabel | WP-Menü | Ohne „Hospital“ (Rauch-Punkt) | APP-05-Archiv |
| SLIDER-01 | Untertitel / Psycho-CTA | YOO | Ohne „Sanft Heilen“; CTA → `/psychotherapie-augsburg/` | `archive/2026-08-14/QW-SITEMAP-SLIDER-01.md` |
| PAGESPEED | Stichprobe 15.08. | extern | Mobil 79 / Desktop 97, später 82/97 | `archive/2026-08-15/PAGESPEED-*.md` |
| SPEED-03 | Nach Plesk | Host + HFCM | TTFB ~255 ms · Mobil 81 · Desktop 98 | `archive/2026-08-15/SPEED-03-after-plesk.md` |
| SPEED-LCP | Preload erstes Folienbild | HFCM #9 | Falsches OD-SVG-Preload wird entfernt | `archive/2026-08-17/SPEED-LCP-CACHE.md` |
| CACHE | Super Cache Simple | WP | Exclude `/kontakt`, `/anamnese`, `wp-json`, GET, Login. Autoptimize/AssetCleanUp/Async/SpeedBooster **aus** | dasselbe |

---

## Phase 5 – HWG-Sprache Start + Hubs (15.08.2026)

| ID | Schritt | Ort | Was ein Entwickler wissen muss | Archiv |
|----|---------|-----|--------------------------------|--------|
| HWG-01 | Start-Tagline | YOO | Ohne „heilen“ | `archive/2026-08-15/HWG-01-tagline.md` |
| CONTENT-01 | Starttexte + Kern-Slogans | YOO | Slogan „Naturheilkundlich begleiten – Stark im Leben“ | `archive/2026-08-15/CONTENT-01.md` |
| CONTENT-01b | 48 Slogans + NLS-H2 | YOO / #15 | Sichtbar kein „Sanft Heilen“ | `archive/2026-08-15/CONTENT-01b-slogans-metatron.md` |
| HUB-01 | Start-Einstieg | YOO + #8 | Termin, Grenzen, Themenlinks | `archive/2026-08-15/HUB-01-startseite.md` |
| HUB-02 | NLS-Einstieg | YOO | Diagnostik, Hinweis, Kindlinks | `archive/2026-08-15/HUB-02-diagnostik.md` |
| HUB-03 | Bioresonanz-Einstieg | YOO | Hinweis + Kindlinks | `archive/2026-08-15/HUB-03-bioresonanz.md` |
| HUB-04 | Naturheilkunde-Einstieg | YOO | Einleitung + Kindlinks | `archive/2026-08-15/HUB-04-naturheilkunde.md` |
| HUB-05 | Psychotherapie-Einstieg | YOO | Hinweis + Kindlinks | `archive/2026-08-15/HUB-05-psychotherapie.md` |
| HUB-06 | Manuelle Verfahren | YOO | Einleitung + Kindlinks | `archive/2026-08-15/HUB-06-manuell.md` |
| HUB-07 | Schmerztherapie | YOO | Hinweis + Kindlinks | `archive/2026-08-15/HUB-07-schmerz.md` |

Hub-URLs siehe `04-urls-und-cluster.md`.

---

## Phase 6 – NLS/Hospital + Kontrast (15.08.2026)

Hospital als **Gerätename** darf stehen, wo der Betreiber es ausdrücklich will (Slider-Zeile 2, H2 „Metatron Hospital System“). Nicht als Heilclaim, nicht im Local-Pack-Erstbild, nicht als „Diagnose erstellt“.

| ID | Schritt | Ort | Archiv |
|----|---------|-----|--------|
| SLIDER-NLS | Erste Folie Metatron Hospital (nur Slider) | YOO / später #15 | `archive/2026-08-15/SLIDER-NLS-METATRON.md` |
| BIT-H2 | Slider-H2 ohne Hospital-Claim | YOO / #15 | `archive/2026-08-15/BIT-H2-HOSPITAL.md` |
| NLS-CAPTION | Grid-Titel → `NLS-Diagnostik` | YOO | `archive/2026-08-15/NLS-CAPTION-METATRON.md` |
| HOME-NLS-CARD | Karte ohne Hospital-System / „schnell präzise“ | YOO | `archive/2026-08-15/HOME-NLS-CARD.md` |
| HOME-LIST | Listenpunkt → NLS-Diagnostik nach Nesterov | YOO | `archive/2026-08-15/HOME-LIST-HOSPITAL.md` |
| NLS-LOWER | Unterer Fließtext ohne „Diagnose erstellt“ | YOO | `archive/2026-08-15/NLS-LOWER-HOSPITAL.md` |
| KONTRAST | AA auf 7 Hubs | HFCM **#11** | `archive/2026-08-15/KONTRAST-STRUKTUR-NLS.md` |
| MOB NLS | Hospital/Hunter aus dem Erstbild | #15 / #9 | `archive/2026-08-17/MOB-LOCAL-A11Y.md` |

Kanonisch für DOM-Umschreibungen: `snippets/wv-slogans-alts.html` (HFCM **#15**). YOO-Felder sind nicht überall erreichbar (leere AFTER[] beim Drill) – deshalb DOM-Rewrite.

---

## Phase 7 – Verfahrenstexte VERF-01…18 (15.08.2026)

Kürzung ohne zweiten Disclaimer, ohne Symptomkatalog, ohne Keyword-Fett.

| ID | Seite / Block | Archiv |
|----|---------------|--------|
| VERF-01 | Naturheilkunde: Hahnemann, drei kurze Absätze | `archive/2026-08-15/VERF-01.md` |
| VERF-02 | Komplex-Homöopathie | `VERF-02.md` |
| VERF-03 | Phytotherapie | `VERF-03.md` |
| VERF-04 | NAET, ohne Symptomkatalog | `VERF-04.md` |
| VERF-05 | Injektion/Neuraltherapie | `VERF-05.md` |
| VERF-06 | Schmerz: Kinesiologie (HUB-07 behalten) | `VERF-06.md` |
| VERF-07 | Schmerz: Homöopathie | `VERF-07.md` |
| VERF-08 | Schmerz: Injektion, ohne Indikationsliste | `VERF-08.md` |
| VERF-09 | Bioresonanz: Trikombin (HUB-03 behalten) | `VERF-09.md` |
| VERF-10 | Manuell: IMT-Block, Technikliste behalten | `VERF-10.md` |
| VERF-11 | Osteopathie | `VERF-11-15.md` |
| VERF-12 | Lowen / Biovalent | `VERF-11-15.md` |
| VERF-13 | Physiotherapie | `VERF-11-15.md` |
| VERF-14/14b | IMT-Unterseite | `VERF-11-15.md` |
| VERF-15 | NLS-Anwendungsliste ohne Keyword-Fett | `VERF-11-15.md` |
| VERF-16 | NLS-Intro ohne Keyword-Fett | Prewrite `verf-16-*` |
| VERF-17/18 | Microkinesie + Dorn auf Manuell-Hub | Prewrite `verf-17-*`, `verf-18-*` |

---

## Phase 8 – Typo und CTA (15.08.2026)

| ID | Schritt | Ort | Was ein Entwickler wissen muss | Archiv |
|----|---------|-----|--------------------------------|--------|
| B5-TYPE-01 | H1 36/30, Fließtext 400 | HFCM #11 | Später durch eine sitewide Skala ersetzt (Phase 12) | `archive/2026-08-15/B5-TYPE-01.md` |
| UX-04 | Abstand Termin/Anamnese | HFCM #8 | 21 px | `archive/2026-08-15/UX-04-05.md` |
| UX-05 | PE- und Anamnese-Button gleiche Breite | HFCM #8 | Nach Bild-Load messen | dasselbe |
| RESP-01 | Slider 320/380, sizes 100vw | HFCM #9 | Folie 2–n lazy. Mobil später 240 | `archive/2026-08-15/WELLE-2-RESP-IMG.md` |
| WELLE-4/5 | Folge-UX | HFCM | Siehe Archiv | `archive/2026-08-15/WELLE-4.md`, `WELLE-5.md` |
| B5-NAP/FAQ | NAP + erste FAQ | HFCM #7 | Grundlage für spätere FAQ-Karten | CURRENT #65 |
| QW-TITELCASE | Rank Math Title-Case aus | RM | Keine automatische Großschreibung | CURRENT #67 |

---

## Phase 9 – Kindseiten-Cluster und Legal (15.–16.08.2026)

Texte in Welle 6–10 **nicht** umgeschrieben, nur Cluster-Navigation (HFCM **#13**) vor dem Disclaimer.

| ID | Umfang | Archiv |
|----|--------|--------|
| WELLE-6 | 10 Naturheilkunde-/Psycho-Kinder | `archive/2026-08-15/WELLE-6.md` |
| WELLE-6A | H1 Phyto/Hypno/Injektion; Meta Heilmeditation; Title NAET | `archive/2026-08-16/WELLE-6A.md` |
| WELLE-7 | 10 Hinweisdiagnostik-URLs | `archive/2026-08-16/WELLE-7.md` |
| WELLE-8 | 10 BIT/Bioresonanz/Schmerz/Qigong | `archive/2026-08-16/WELLE-8.md` |
| WELLE-9 | 10 Manuell/IMT/Micro/Physio | `archive/2026-08-16/WELLE-9.md` |
| WELLE-10 | 8 Lowen/Rehab | `archive/2026-08-16/WELLE-10.md` |
| WELLE-11 | Legal/Utility: Metas, Doku-H1, Corona **noindex**, HFCM **#14** | `archive/2026-08-16/WELLE-11.md` |

HFCM #14 (`snippets/legal-w11.html`): historischer Corona-Kasten auf `/corona-praxis-offen/`; Download-Anamnese-Link zeigt inzwischen auf den **Hub**, nicht mehr direkt auf Lovable.

---

## Phase 10 – Kindseiten-Texte (16.08.2026)

Gleiche Sprache wie die Hubs. Vorher-Stände und gesetzte Texte:

| ID | Cluster | Texte | Archiv |
|----|---------|-------|--------|
| WELLE-12 | Hubs lokal: Hours + areaServed in #6; Schmerz eine H1; NLS-Alt; Meta Hochzoll. Geo war noch Alt-Pin, später 19a | — | `archive/2026-08-16/WELLE-12.md` |
| WELLE-13 | 10 Naturheilkunde-Kinder | `archive/2026-08-16/w13-texts/` | `WELLE-13.md` |
| WELLE-14 | 10 Hinweisdiagnostik-Kinder | `w14-texts/` | `WELLE-14.md` |
| WELLE-15 | 10 BIT/Bioresonanz/Schmerz/Qigong | `w15-texts/` | `WELLE-15.md` |
| WELLE-16 | 18 Manuell/Lowen (IMT-Hauptseite geprüft) | `w16-texts/` | `WELLE-16.md` |

---

## Phase 11 – Hygiene 17–18 (16.–17.08.2026)

| ID | Schritt | Ort | Archiv |
|----|---------|-----|--------|
| WV-H2 | H2-Slogans „Sanft Heilen…“ aus; Alt ohne Sanft Heilen | HFCM **#15** | `archive/2026-08-16/WV-NACH-WELLEN.md` |
| WV-DISC | Kein zweiter Disclaimer; Hahnemann-Restpanel geleert | YOO + #7 | dasselbe |
| WV-W13 | Hahnemann Eigenversuch / Heilmeditation „Hölle“ geleert | YOO | dasselbe |
| WV-VERSUS Alts | Bild-title/alt „versus“ → „und“ | #15 | dasselbe |
| WV-VERSUS-SLUG | `/bioresonanz-und-elektroakupunktur/` + 301 von versus | WP / 404 Solution | `archive/2026-08-17/WELLE-18.md` |
| W17-FAQ-NOTFALL | FAQ 112 / 116 117 | #7 | `archive/2026-08-17/WELLE-17.md` |
| W17-SKIP | Skip-Link „Zum Inhalt“ | HFCM **#16** | dasselbe |
| W17-SCHEMA-HYG | `priceRange` / `medicalSpecialty` aus #6; Geo 19a bleibt | #6 | dasselbe |
| W18-KOSTEN | FAQ Kosten ohne Preise | #7 | `WELLE-18.md` |
| W18-RM | Seiten-Schema-Standard „Keiner“; Claim „loszuwerden“ im DOM via #15 weg (Roh-JSON in RM kann bleiben) | RM + #15 | `WELLE-18.md` |
| W18-LCP | Slider mobil **240 px** | #9 | `WELLE-18.md` |
| LOC-GEO | Schema 48.339465 / 10.948931 (19a) | #6 | PLAN / CURRENT |

WV-RM Article-JSON im Rank-Math-Generator: **weiter ohne editierbares Feld** – nicht still Article global abschalten.

---

## Phase 12 – Lokal, Mobil, Typo A/B (17.08.2026)

| ID | Schritt | Ort | Was ein Entwickler wissen muss | Archiv |
|----|---------|-----|--------------------------------|--------|
| LOCAL-HUB | Titles/H1 „… in Augsburg“ auf 5 Hubs | RM + YOO/H1 | Kein zweites „Heilpraktiker Augsburg“ | `archive/2026-08-17/LOCAL-HUB-LAGE.md` |
| LOCAL-LAGE | Start-Lage + FAQ „Wo liegt die Praxis?“ | YOO + #7 | Hochzoll / 19a / Friedberg / Lechhausen-Ost | dasselbe |
| MOB-1-5 | Local-Bar Anrufen/Route/Zeiten | HFCM **#17** | Nur Start + Hubs + Anamnese-Hub. `snippets/local-action-bar.html` | `archive/2026-08-17/MOB-LOCAL-A11Y.md` |
| MOB-Maps | #7 Adresse = Maps-Link; Tel 44 px | #7 | — | dasselbe |
| MOB-H | Leere/11-px-Überschriften aus | #11 | — | dasselbe |
| TYPO-A | Slogan sichtbar; Bar unter Slogan links; eine Skala; CTA nach Ziel-Satz | #11 #17 #8 | Plan vorher schriftlich | `archive/2026-08-17/PLAN-TYPO-START-HUBS.md` |
| WELLE-B | Slogan 700 + H1-Kante; Bar 13–14 px; Ziel=Fokus; unteres Termin-Duplikat aus; Footer ohne Pipes; Hub-URL | #8 #10 #11 #17 | `archive/2026-08-17/PLAN-WELLE-B.md` | dasselbe + CURRENT #89 |
| KIND-SKALA | `html.eeat-type-a` sitewide | #11 / #17 | H1 28/36, Slogan 17/700, Fließ 16,5. Bar **nicht** auf Kindseiten | CURRENT #90 |
| SLIDER/INTRO | Overlay mobil skaliert; NLS-Layer; Start-Intro zentriert | #11 #15 | Intro-Block „Ich begleite…Themen“ | CURRENT #91 |
| CTA/BNI | Start-CTAs mittig; BNI max 72/110 | #8 #10 | — | CURRENT #92 |

Typo-Endstand (Tokens, keine Pixel-Religion):

| Token | Desktop | Mobil |
|-------|---------|-------|
| H1 | 30–36 px / 500 | 28–30 |
| H2 | 21–26 / 500 | 21 |
| Slogan | 18 / **700** | 17 / 700 |
| Fließ | 16,5 / 400 / 1,55 | gleich |
| Local-Bar | 14 | 13 |
| Tap | min 44 px | 44 |

---

## Phase 13 – Anamnese-Hub, FAQ, Menü, Slider-Klon (17.08.2026)

| ID | Schritt | Ort | Was ein Entwickler wissen muss | Archiv |
|----|---------|-----|--------------------------------|--------|
| ANA-HUB | Inhalt Seite 6705 | WP REST `pages/6705` | Kanonisch `snippets/anamnese-hub-content.html` | `ANA-MENU-FAQ.md` |
| ANA-MENU | Navbar 12 + Footer 39 | WP `nav-menus.php` | URL Hub, kein `_blank` | dasselbe |
| ANA-REMAP | Restliche Lovable-Anker | #8 #10 #12 #14 | Ausnahme: `a.eeat-anamnese-app-link` auf dem Hub | dasselbe |
| FAQ-EEAT | FAQ als 01–06-Karten | #7 | `dl/dt/dd`, FAQPage JSON-LD analog, ein Disclaimer | dasselbe |
| SLIDER-KLON | YOO-Slider von `/bioresonanz-therapie/` | Seite 6705 + #8 | Wrapper `.eeat-ana-yoo-slider` wird **vor** `#tm-main` geschoben. 4 Folien, Desktop ~550, Mobil 240 via #9 | `archive/2026-08-17/SLIDER-GAPS-HUBMARK.md` |
| GAPS | Leere `p`/`uk-panel`/volle-Breite-Leerzellen | #11 | Bild+Text-Raster **mit** Medien nicht anfassen | dasselbe |
| HUB-PUNKT | 6-px-Kreis `#8ec760` | #17 | Klasse `eeat-hub-link`. Nicht am Hamburger, nicht an „Rauch“ | dasselbe |

---

## Plesk / Hosting (Betreiber, parallel)

| ID | Wer | Was |
|----|-----|-----|
| Plesk-Cache-Control | Betreiber | Statischer Cache gesetzt (14.–15.08.) |
| WP_CACHE | Live | In `wp-config.php` auf true (Super Cache) |
| Brotli | Host | Live an; TTFB weiter Host-Sache |

Diese Schritte stehen nicht als HFCM-Snippet, sind aber Teil der Speed-Phase.
