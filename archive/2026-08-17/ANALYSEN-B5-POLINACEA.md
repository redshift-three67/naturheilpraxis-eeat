# Auswertung: B5- und Polinacea-Masterpläne für rauch-heilpraktiker.de

**Datum:** 2026-08-17  
**Quellen:**  
`naturheilpraxis-rauch/docs/andere_analysen/Master-Umsetzungsplan_Buero5_EEAT_2026_konsolidiert.docx`  
`…/Master-Umsetzungsplan_Polinacea_Heilpraktiker_Augsburg_EEAT_2026_konsolidiert.docx`  
Abgleich: Live rauch-heilpraktiker.de + `docs/PLAN.md` (Wellen 1–16, WV).

Die Pläne gelten für **andere Domains** (Werbeagentur bzw. Innenstadt-Heilpraktikerin). Übernommen wird nur, was hier Nutzen hat, YMYL/HWG-fest ist und sich stabil (HFCM/ein Schema/keine neuen Thin-URLs) umsetzen lässt.

## Schnittmenge beider Pläne

| Forderung | Für uns |
|-----------|---------|
| Ein SEO-/Schema-System, keine Plugin-Parallelen | schon live (Rank Math + HFCM #6) |
| Schema nur sichtbare, belegte Daten | **Lücke:** `priceRange` €€ und engl. `medicalSpecialty` im HFCM-Schema ohne sichtbaren Beleg |
| GBP + NAP + Reviews, keine Keyword-Namen | **Du**, Wiedervorlage |
| Keine Orts-Türseiten (Friedberg-Klone) | schon Regel |
| Keine Heilversprechen, keine Symptom-Metas | schon Regel + Wellen 13–16 |
| CWV: LCP ≤ 2,5 s Feld; 2,0 s nur interne Ambition | Mobil-LCP noch Arbeit, später mit Exclude |
| Ein Plugin je Funktion | schon (ShortPixel, Rank Math, kein zweites SEO) |
| FAQ/Review-Markup nur bei sichtbarem Inhalt | FAQ = HFCM #7, sichtbar; kein Review-Markup |
| llms.txt optional, kein Rankinghebel | später, nach Pin/NAP |
| Ads erst mit geprüften Landings | Start + 7 Hubs, nicht Lowen-URLs |

## Polinacea-spezifisch (gleiche Branche, andere Lage)

| Vorschlag | Urteil |
|-----------|--------|
| Neue Pillar `/heilpraktiker-augsburg/` | **nein** – Start-H1 ist bereits „Heilpraktiker Augsburg“. Zweite URL = Kannibale |
| `/ratgeber/`, 3–5 Artikel, Quellen/Leitlinien | **nein** – Glossar-/Farm-Risiko, YMYL ohne echte Primärquellen |
| `/notfallhinweis/` eigene URL | **nein** – zweiter Trust-Block; Satz gehört in bestehendes FAQ #7 |
| Leistungs-Template mit Risiken/Kosten/Quali **pro Kindseite** | **nein** als 48er-Rewrite – zweiter Disclaimer, nicht haltbar |
| Notfall 112 / Arzt im sichtbaren Trust | **ja** – eine FAQ in HFCM #7 |
| Ersttermin-Ablauf | **schon** Anamnese + Termin; kein dritter Block nötig |
| Qualifikations-/Fortbildungsliste | nur wenn Du echte Nachweise lieferst; nichts erfinden |
| Kosten/Erstattung sachlich | **ja als FAQ**, ohne Preise, nach Deiner Bestätigung: Privatleistung, Erstattung bei der Kasse/Versicherung klären |
| Apple Business Connect / Bing Places | **Du**, NAP = Impressum |
| ProfessionalService statt Clinic | **nein** – MedicalClinic+Physician bleibt |
| Service-Schema auf Verfahren | **nein** – wie Product-Schema: zu viel, zu claim-nah |
| Rank Math Pro / Yoast / AIOSEO | **nein** |

## Büro-5-spezifisch (andere Branche)

| Vorschlag | Urteil |
|-----------|--------|
| Case Studies, Awards, KPI-Cases | **nein** (HWG, keine Patienten-Outcomes) |
| LocalBusiness-Graph | **nein** – würde mit MedicalClinic konkurrieren |
| BreadcrumbList | nur wenn sichtbare Breadcrumbs existieren. Live: **keine**. Nicht erfinden |
| Skip-Link, Fokus, Labels | Skip-Link live **fehlt** → klein, HFCM, Nutzen |
| WP Rocket + Redis + Wordfence + CSP/HSTS | später Hosting/Speed, nicht Inhalt |
| Autoren mit dateModified pro URL | sitewide „Stand: August 2026“ reicht; keine 64 nicht gepflegten Daten |

## Live-Stichprobe 17.08.

Home/Kontakt/NLS: Anamnese/Termin ja · 112/Notfall nein · Kosten nein (nur Impressum-Wort) · sichtbare Breadcrumbs nein · Skip-Link nein · Schema MedicalClinic+Physician+FAQ+Rank-Math-Article ja.
