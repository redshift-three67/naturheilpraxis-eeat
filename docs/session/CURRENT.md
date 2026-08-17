# Session CURRENT – rauch-heilpraktiker.de

Stand: 2026-08-17 · Wellen 1–16 + WV live · Plan nach B5/Polinacea-Analysen konsolidiert

## Massgabe

**GitHub Repository `redshift-three67/naturheilpraxis-eeat` ist die alleinige Referenz.**  
**Knowledge-Basis:** https://github.com/redshift-three67/eeat-optimierung  
**Tagesabschluss:** `docs/session/TAGESABSCHLUSS-2026-08-14.md`  
**Nächster Session-Prompt:** `docs/session/PROMPT-FORTSETZUNG.md`  
**Restore:** `archive/2026-08-14/CHECKPOINT-2026-08-14.md`  
Handoff-Historie: `docs/session/HANDOFF-2026-08-14.md`

## Umgebung jetzt

- Auftraggeber: lokaler **Debian-Server** + **Grok Build CLI**
- Transport: **strikt Chrome CDP Live**
- **CDP-Port dieser Session: `127.0.0.1:9224`** (exklusiv)
- Fremd-Sessions nicht anfassen: `9223` Lovable, `9225` Sunclinic
- Chrome-Profil: `/tmp/chrome-rauch-heilpraktiker-cdp`
- Staging: deaktiviert
- WP-Admin: **eingeloggt** über CDP (Anzeige „Administrator“ / Konto `Redshift-Three`)

## Live-Kernstatus (re-validiert 20:56 CEST, Cache-Bust + CDP)

- TQW-01…04 erledigt (siehe archive/2026-08-14/)
- robots Sitemap: `https://rauch-heilpraktiker.de/sitemap_index.xml` (Plesk, 07:46 UTC, 64 https-URLs)
- HFCM #6 Schema ON, #5 OFF, #7 Disclaimer+Autor ON
- Frontend: 1× MedicalClinic+Physician (identisch Repo-Snippet)
- Disclaimer sitewide sichtbar
- **Rank Math SEO ON** (SCHEMA-03, nur `seo-by-rank-math/`; old/PRO bleiben aus)
- Frontend-Metas wieder da (TQW-03-Texte); robots `follow, index`
- **snip pro OFF**, **Schema-Plugin OFF**, HFCM **ON**, noindex SEO **ON**
- JSON-LD: 1× HFCM MedicalClinic+Physician + Rank-Math (Organization/WebSite/WebPage/Person)
- **Lokales SEO-Modul OFF** (SCHEMA-04) – kein HealthAndBeautyBusiness / LocalBusiness mehr

## Workflow

Siehe `docs/WORKFLOW.md` – Prewrite → Live → Verify → Dokumentieren / Wiedervorlage

## Nächster Schritt

1. ~~WP-Admin-Login~~ erledigt
2. ~~SCHEMA-01 snip pro aus~~
3. ~~SCHEMA-02 Schema-Plugin aus~~
4. ~~SCHEMA-03 Rank Math an~~
5. ~~SCHEMA-04 Lokales SEO aus~~ live_verified
6. ~~META-01 NLS-Titel~~
7. ~~NOINDEX-01 EAV+BIT index~~
8. ~~META-02 Umlaute + BIT-Titel~~ live_verified

noindex-SEO-Plugin: **0/110 Optionen an** – nur Konflikt-Warnung, keine globalen noindex-Regeln.  
9. ~~META-03 NLS-Keywords~~
10. ~~META-04 YMYL-Titel~~
11. ~~META-05 restliche Werbetitel (8 Seiten)~~
12. ~~META-06 Claim-/ASCII-Metas (5 Seiten)~~ live_verified
13. ~~APP-01…05 Anamnesebogen~~ inkl. Button-Stil unter „Jetzt Termin buchen“
14. ~~SPEED-01~~ Kenburns mobil aus, Slider-Höhe reduziert
15. ~~QW-MENU-METATRON~~ NLS-Label ohne Hospital (Rauch-Punkt korrigiert)

16. ~~SLIDER-01~~ Untertitel ohne „Sanft Heilen“; Psychotherapie-CTA → `/psychotherapie-augsburg/`
17. ~~QW-SITEMAP~~ Live-robots `sitemap_index.xml` (64 https-URLs)
18. ~~UX-01~~ Footer-Legal auf XS sichtbar (HFCM #10)
19. ~~UX-02~~ Cookie-Banner mobil 109 px statt 190 px (HFCM #10)
20. ~~APP-06~~ Anamnese-Button: PE-Breite + Rahmen `#8ec760` (HFCM #8)
21. ~~APP-07~~ Slider-Folie Online-Anamnesebogen (YOO-Duplikat, Folie 1)
22. ~~SPEED-02~~ Folien bereits WebP; LCP `eager`/`high` (HFCM #9)
23. ~~HWG-01~~ Start-Tagline ohne „heilen“
24. ~~CONTENT-01~~ Starttexte + Slogan/Slider Kernseiten
25. ~~CONTENT-01b~~ restliche Slogans (48) + NLS-H2 ohne „Hospital“
26. ~~HUB-01~~ Startseite Einstieg (Termin + Grenzen + Themenlinks)
27. ~~pagespeed.de~~ Mobil 79 / Desktop 97 · Archiv `PAGESPEED-2026-08-15.md`
28. ~~HUB-02~~ NLS als Diagnostik-Einstieg (Hinweis + Kindlinks)
29. ~~HUB-03~~ Bioresonanz-Einstieg (Hinweis + Kindlinks)
30. ~~pagespeed.de 13:48~~ Mobil 82 / Desktop 97 · `PAGESPEED-2026-08-15-1348.md`
31. ~~SLIDER-NLS~~ erste Folie: Metatron Hospital (nur Slider)
32. ~~HUB-04~~ Naturheilkunde-Einstieg (Einleitung + Kindlinks)
33. ~~HUB-05~~ Psychotherapie-Einstieg (Hinweis + Kindlinks)
34. ~~HUB-06~~ Manuelle Verfahren-Einstieg (Einleitung + Kindlinks)
35. ~~BIT-H2~~ Slider `Metatron Hospital nach Nesterov` → `NLS-Diagnostik nach Nesterov`
36. ~~HUB-07~~ Schmerztherapie-Einstieg (Hinweis + Kindlinks)
37. ~~NLS-CAPTION~~ Grid-Titel `Metatron Hospital System` → `NLS-Diagnostik`
38. ~~KONTRAST-Messung Hubs~~ AA auf 7 Hub-Seiten (HFCM #11)
39. ~~HOME-NLS-CARD~~ Karte ohne Hospital-System / ohne „schnell präzise“
40. ~~HOME-LIST~~ `Metatron Hospital nach Nesterov` → `NLS-Diagnostik nach Nesterov`
41. ~~NLS-LOWER~~ Hospital-System / „Diagnose erstellt“ im unteren Fließtext
42. ~~SPEED-CHECK~~ Brotli live an; TTFB nur über Hosting
43. ~~VERF-01~~ Naturheilkunde: Hahnemann in drei kurze Absätze, ohne zweiten Disclaimer-Satz
44. ~~VERF-02~~ Naturheilkunde: Komplex-Homöopathie gekürzt
45. ~~VERF-03~~ Phytotherapie gekürzt
46. ~~VERF-04~~ NAET gekürzt, ohne Symptomkatalog
47. ~~VERF-05~~ Injektion/Neuraltherapie gekürzt
48. ~~VERF-06~~ Schmerz: Kinesiologie gekürzt, HUB-07 behalten
49. ~~VERF-07~~ Schmerz: Homöopathie gekürzt
50. ~~VERF-08~~ Schmerz: Injektion gekürzt, ohne Indikationsliste
51. ~~VERF-09~~ Bioresonanz: Trikombin gekürzt, HUB-03 behalten
52. ~~VERF-10~~ Manuell: IMT-Block gekürzt, Technikliste behalten
53. ~~VERF-11~~ Manuell: Osteopathie
54. ~~VERF-12~~ Manuell: Lowen / Biovalent
55. ~~VERF-13~~ Manuell: Physiotherapie
56. ~~VERF-14/14b~~ IMT-Unterseite
57. ~~VERF-15~~ NLS-Anwendungsliste ohne Keyword-Fett
58. ~~B5-TYPE-01~~ H1 36/30, Fließtext 400
59. ~~UX-04~~ Abstand Termin/Anamnese 21 px
60. ~~UX-05~~ PE+Anamnese gleiche Breite nach Bild-Load
61. ~~RESP-01 / B5-IMG~~ Slider 320/380, sizes 100vw, Folie 2–n lazy
62. ~~SPEED-03~~ nach Plesk: TTFB 255 ms · Mobil 81 · Desktop 98
63. ~~VERF-16~~ NLS-Intro ohne Keyword-Fett
64. ~~VERF-17/18~~ Microkinesie + Dorn auf Manuell-Hub
65. ~~B5-NAP-01 + B5-FAQ-01~~ HFCM #7
66. ~~QW-NOINDEX~~ Plugin deaktiviert
67. ~~QW-TITELCASE~~ Rank Math aus
68. ~~Kontakt-Satz~~ HFCM #12
69. ~~WELLE-6 Cluster~~ HFCM #13 auf 10 Kindseiten; Texte archiviert, nicht umgeschrieben
70. ~~WELLE-6A~~ H1 Phytotherapie / Hypno / Injektion; Meta Heilmeditation; Title NAET
71. ~~WELLE-7 Cluster~~ HFCM #13 + 10 Hinweisdiagnostik-URLs; Texte unverändert
72. ~~WELLE-8 Cluster~~ HFCM #13 + 10 BIT/Bioresonanz/Schmerz/Qigong; Texte unverändert
73. ~~WELLE-9 Cluster~~ HFCM #13 + 10 Manuell/IMT/Micro/Physio; IMT-Text unverändert
74. ~~WELLE-10 Cluster~~ HFCM #13 + 8 Lowen/Rehab; Texte unverändert
75. ~~WELLE-11 Legal~~ H1 Doku, Metas, Corona noindex, HFCM #14, Anamnese→Lovable
76. ~~WELLE-12~~ Hours+areaServed, Schmerz eine H1, NLS-Alt, Meta Hochzoll; Geo offen
77. ~~WELLE-13~~ 10 NH-Kinder Hub-VERF-Texte + H1 Darm/Ortho/NAET + 3 Metas
78. ~~WELLE-14~~ 10 Hinweisdiagnostik-Kinder Texte/H1/Meta
79. ~~WELLE-15~~ 10 BIT/Bioresonanz/Schmerz/Qigong Texte/H1/Meta
80. ~~WELLE-16~~ 18 Manuell/Lowen Texte/H1/Meta (IMT-Hauptseite geprüft)
81. ~~WV-H2 / WV-DISC / WV-W13~~ HFCM #15 + Hahnemann/Heilmed-Reste
82. ~~WV-VERSUS Alts~~ live; Slug offen
83. WV-RM Article-JSON weiter offen (kein Rank-Math-Feld)
84. ~~SPEED-LCP~~ HFCM #9: Preload + erstes Folien-`src`/`eager`/`high`
85. ~~CACHE~~ WP Super Cache Simple + Excludes; andere Speed-Plugins bleiben aus
86. ~~LOCAL-HUB~~ Titles/H1 mit Augsburg (5 URLs); Start-Lage + FAQ Wo liegt die Praxis?
87. ~~MOB-1-5~~ Local-Bar Anrufen/Route/Zeiten; #7 Maps; NLS Hospital/Hunter; leere/11px-H; Tap 44 px
88. ~~TYPO-A~~ Slogan sichtbar; Bar Icons links darunter; Skala Start+Hubs; CTA nach Ziel-Satz
89. ~~WELLE-B~~ Slogan fett/fluchtend; Bar kleiner; Ziel=Fokus; Termin-Duplikat weg; Footer-Legal; Hub /online-anamnesebogen/
90. ~~KIND-SKALA~~ Typo-Skala + Slogan 17/700 + Absatzrhythmus auf alle Frontend-Seiten; Bar nur Hubs
91. ~~SLIDER/INTRO~~ Overlay mobil skaliert; NLS-Layer Metatron Hospital; H2 Hospital System; Start-Intro zentriert
92. ~~CTA/BNI/FAQ~~ Start-CTAs mittig; BNI max 72/110; FAQ-Link Anamnese-Hub; leere Absätze aus

CDP-Hinweis: nach „Layout speichern“ `process.exit(0)` – kein `page.close()`. Der „hängende Customizer“ war Playwright beim Schließen des Tabs, nicht ein fehlgeschlagenes Speichern. Untere YOO-Textkacheln erst nach `scrollTop = scrollHeight` sichtbar.

Siehe `docs/PLAN.md` (konsolidiert 15.08. Abend: Kindseiten-Standard + Welle 6–11).

Wellen 1–5 im Repo/WP erledigt. Offen nur extern: GBP/NAP-Abgleich. Optional nginx-HIT. Speed-Plugin nur mit Exclude-Liste.

**Welle 16 live. WV-H2/DISC/W13/versus-Alts live.** Geo und Versus-Slug weiter offen.

**Welle 18 live** (Versus-Slug+301, Kosten-FAQ, Article-Claim im DOM weg, Slider 240).  
**SPEED-LCP live:** HFCM #9 Preload erstes Folienbild + `src`/`eager`/`high`; OD-SVG-Preload wird entfernt.  
**CACHE live:** WP Super Cache Simple; Exclude `/kontakt`, `/anamnese`, `wp-json`, GET, Login. Autoptimize/AssetCleanUp/Async/SpeedBooster bleiben aus.  
Wiedervorlage: Fortbildungen, llms.txt, Ads. Du: GBP-Stunden + Pin, Kataloge, Downloads.

Audit Sitemap 64 URLs. Auswertung der Fremdpläne: `archive/2026-08-17/ANALYSEN-B5-POLINACEA.md`.
