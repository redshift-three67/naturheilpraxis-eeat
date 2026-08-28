# Umsetzungsplan – rauch-heilpraktiker.de (konsolidiert)

Stand: 2026-08-20  
**Aktuelle Wahrheit erledigt/offen/nächster Schritt:** `docs/STATUS.md`  
Quellen: Live-Wellen 1–16 + WV · GBP 19.08. · B5/Polinacea (`archive/2026-08-17/ANALYSEN-B5-POLINACEA.md`)  
CDP `127.0.0.1:9224` · Repo `naturheilpraxis-eeat` · `docs/WORKFLOW.md`

YMYL/HWG: keine Heilversprechen · Disclaimer nur HFCM #7 · Schema nur HFCM #6 + Rank Math  
**B5** = Struktur/Technik, kein Inhaltsklon. **Polinacea** = gleiche Branche, Innenstadt – Lage nicht imitieren.

---

## Auftrag (gültig)

1. Lokal glaubwürdig für **Augsburg-Ost / Hochzoll / Friedberg**, nicht „zentral Augsburg“.  
2. Eine Sprache auf Hubs und Kindseiten (Wellen 13–16 live).  
3. Keine neuen Thin-URLs, kein Glossar, kein Product/Service-Schema, kein zweites Disclaimer.

**Inhaltlich erledigt:** Wellen 1–18, Cluster #13, Legal #14, Slogans #15, Typo A/B, Anamnese-Hub, GBP-Profil.  
**Nicht bauen:** Breitenberger-Inhaltsmaschine (`docs/07-breitenberger-inhaltsmaschine.md`).

---

## Filter aus den beiden Analysen

Übernommen nur bei **Nutzen + Beleg + stabiler Umsetzung** (HFCM oder ein bestehendes Feld).

| Übernehmen | Nicht übernehmen |
|------------|------------------|
| Schema nur sichtbare Daten (`priceRange` / `medicalSpecialty` prüfen) | Neue Pillar `/heilpraktiker-augsburg/` (Start ist die Pillar) |
| Eine FAQ „Notfall 112 / Arzt“, im **bestehenden** #7 | Eigene `/notfallhinweis/` oder zweiter Body-Disclaimer |
| Skip-Link (WCAG, live fehlend) | 48 Kindseiten mit Risiko-/Kosten-Blöcken |
| Kosten-FAQ ohne Preise, nach Deiner Bestätigung | Ratgeber-Farm, Leitlinien-Listen ohne Primärquelle |
| Apple/Bing/NAP/Reviews bei Dir | Service-Schema, ProfessionalService statt Clinic |
| GBP/Pin/Geo 19a (schon WV) | Rank Math Pro / Yoast / zweites SEO |
| Ads nur Start + 7 Hubs | Case Studies, Awards, Orts-Klone, Review-Markup |
| llms.txt optional **später** | BreadcrumbList ohne sichtbare Breadcrumbs |

---

## Wiedervorlage (alles noch Offen, im Auge behalten)

### Nach der Pause – klein, bei uns, Freigabe nötig

| ID | Inhalt | Bedingung |
|----|--------|-----------|
| **W17-FAQ-NOTFALL** | FAQ „Was tun im Notfall?“ in HFCM #7 | **live** 17.08. |
| **W17-SKIP** | Skip-Link HFCM #16 | **live** 17.08. |
| **W17-SCHEMA-HYG** | `priceRange` / `medicalSpecialty` entfernt | **live** 17.08. |
| **W17-FAQ-KOSTEN** | FAQ „Wie sind die Kosten?“ Privatleistung, keine Preise | **live** 17.08. |
| **WV-VERSUS-SLUG** | `/bioresonanz-und-elektroakupunktur/` + 301 von versus | **live** 17.08. |
| **WV-RM** | Seiten-Schema-Standard **Keiner**; „loszuwerden“ im DOM per HFCM #15 entfernt (Quelltext-Article bleibt) | **live** 17.08. |

### GBP (19.08. live, nicht erneut setzen)

| ID | Inhalt |
|----|--------|
| **GBP-PIN** | Pin 19a / Schema 48.339465, 10.948931 |
| **GBP-NAP** | Heilpraktiker (Haupt), Naturheilpraktiker (Neben); Tel/URL = Site |
| **NAP-SEE** | Kein Seefelder-Duplikat |
| **HOURS** | Mo–Fr 10:00–12:30 und 13:00–19:00 |
| **AREA** | 86163 + 86316 Friedberg + 86165 Lechhausen; nicht nur Friedberg |

### Beim Betreiber (kein Site-Write)

| ID | Inhalt |
|----|--------|
| **REVIEWS** | Neutral um Google-Bewertung bitten, keine Textvorlage |
| **CITATIONS** | Apple Business Connect, Bing Places, seriöse Profile = dieselbe NAP |
| **DL** | Fünf tote `/download/…` hochladen oder Buttons entfernen |
| **CORONA** | Menüpunkt lassen oder raus (`noindex` ist) |
| **GSC-PACK** | 28-Tage GSC + Pack-Screens; danach Ads-Ja/Nein |

### Blockiert / später

| ID | Inhalt |
|----|--------|
| **LOC-GEO** | Schema-Koordinaten der 19a | **live** 48.339465, 10.948931 (17.08.) |
| **SPEED-LCP** | Slider 240 px + LCP-Preload + erstes Folien-`src` (HFCM #9) | **live** 17.08. |
| **CACHE** | WP Super Cache, Simple, Exclude Kontakt/wp-json/GET/Login | **live** 17.08. |
| **LLMS** | `/llms.txt` optional, nur NAP + Hubs, keine Claims | Wiedervorlage |
| **SEM** | Ads-Pilot nach GSC+Pack; nur Search; Landings = Start + Hubs | Wiedervorlage |
| **QUALI** | Fortbildungen/Werdegang nur mit von Dir gelieferten Nachweisen | Wiedervorlage |

---

## Empfehlung für den nächsten Schritt

**Keine Site-Welle.** Messung: GSC 28 Tage + Local Pack „heilpraktiker augsburg“ (Zeiten/Geöffnet).  
GBP ist gesetzt. Ads erst nach dieser Messung. Detail: `docs/STATUS.md`.

```mermaid
flowchart LR
  gbp["GBP 19.08. live"] --> mess["GSC + Pack"]
  mess --> ads{"Ads-Pilot?"}
  ads -->|nein| pause["Weiter Pause"]
  ads -->|ja| search["Nur Search Start+Hubs"]
```

---

## Lage gegen „Heilpraktiker Augsburg“ (SERP 17.08., Google.de, pws=0)

**Local Pack (3er-Karte):** 1 Palat 4,9/19 · 2 soomia/Schedler 5,0/41 · **3 Naturheilpraxis Rauch 4,9/54**, 19a. Darunter ChiMed, Arendt, Prüfer.  
Rauch zeigt im Pack **keine** Öffnungszeiten; Palat/soomia schon („Geöffnet“). Filterchip „Jetzt geöffnet“ würde uns verlieren.  
**Maps** (Stadtmitte 48,37/10,89): Palat · Polina 5,0/103 · **Rauch** · Gaigl · soomia · Schybaj am Dom.

**Organisch Seite 1 (Rauch nicht dabei):** Polinacea · Doctolib · Natural Medical Coach · Gaigl · Prüfer · Arendt · Paracelsus-Schule · Nejedli · Hessingpark.  
Related: Innenstadt, Lechhausen, Darm, Kinder, Psychotherapie, Ausbildung. Chips: Innenstadt / Jetzt geöffnet / Lechhausen.

Wir sitzen **86163 Hochzoll**. Innenstadt nicht imitieren. Natürlicher Umkreis: Hochzoll, Friedberg, Lechhausen-Ost.

Hebel jetzt: Pack auf „Geöffnet“ prüfen · GSC lesen · optional Ads. Organisch: Start bleibt die Pillar; Hubs nur `[Verfahren] Augsburg`, nicht zweites „Heilpraktiker Augsburg“. Ortsteile nicht in Titles.

**17.08. live (ohne GBP):** Hub-Titles/H1 mit Augsburg (NLS, Bioresonanz, Naturheilkunde, Manuell, BIT). Start-Lage-Satz + FAQ „Wo liegt die Praxis?“ (Hochzoll / 19a / Friedberg / Lechhausen-Ost).  
**Mobil 1–5 live:** Aktionszeile Anrufen/Route/Zeiten unter H1 (Start+Hubs), #7 Maps+Tel 44 px, NLS ohne Hospital/Hunter im Erstbild, leere/11-px-Überschriften, Cookie/Slider-Tap 44 px.

**Typo A1–A4 live.** **Welle B live:** Slogan fett + H1-Kante; Bar 13–14 px links; Ziel wie Fokus; unteres Termin-Duplikat aus; Footer-Legal ohne Pipes; Hub `/online-anamnesebogen/`. Plan: `archive/2026-08-17/PLAN-WELLE-B.md`.  
**Kind-Skala live:** `eeat-type-a` auf allen Frontend-Seiten (H1 28/36, Slogan 17/700, Fließtext 16,5). Local-Bar bleibt Start+Hubs. Bildraster unangetastet. Nach Durchsicht: neue Schriftfamilie, Rebrand.  
**ANA-MENU-FAQ live:** Menüpunkt und interne Anamnese-Links auf `/online-anamnesebogen/`; App erst vom Hub; Slider auf der Hub-Seite; FAQ als nummerierte Karten (E-E-A-T, ein Disclaimer).  
**Slider/Leer/Hub-Punkt live:** Anamnese nutzt den Slider von `/bioresonanz-therapie/`; leere YOO-Panels zu; Hub-Links im Menü mit 6-px-Kreis.  
**GBP 19.08. live:** Pin 19a, Zeiten, PLZ 86163/Friedberg/Lechhausen, Heilpraktiker + Naturheilpraktiker. Pack-Zeiten in GSC-Fenster prüfen.

---

## Erledigt (nicht zurückdrehen)

Wellen 1–18 · HUB-01…07 · VERF-01…18 · Cluster #13 · Legal #14 · Slogans #15 · Schema/Disclaimer/Typo/Speed · Hours/areaServed/Geo 19a · GBP-Profil 19.08.

Historie der Wellen: `archive/2026-08-15/` und `archive/2026-08-16/` (WELLE-12…16, WV-NACH-WELLEN).

---

## Offen bei Dir (Checkliste)

1. ~~GBP NAP/Pin/Zeiten/Kategorien/Einzugsgebiet/Attribute~~ **19.08.** Profil live; Detail `docs/entwickler-handover-eeat-2026-08/07-google-business.md`.  
2. ~~Pin-Koordinaten~~ live im Schema und Profil (48.339465 / 10.948931, 19a).  
3. ~~Öffnungszeiten~~ Mo–Fr 10–12:30 / 13–19 im Profil = Site. Pack in 1–2 Wochen auf „Geöffnet“ prüfen.  
4. areaServed in #6 nur ändern, wenn der GBP-Umkreis abweicht.  
5. ~~Seefelder Str. 20~~ kein GBP-Duplikat (19.08.).  
6. Downloads oder Buttons.  
7. Corona-Menü.  
8. Google-Rezension bitten.  
9. Apple Business Connect / Bing Places gleiche NAP.  
10. Optional: Kosten-Satz und Notfall-Wortlaut gegenzeichnen, Fortbildungsnachweise.  
11. Ads-Pilot erst nach Pack-Check (Search, Start+Hubs).

---

## Wellen 12–16 (Archiv, abgeschlossen)

**12** Hubs lokal ohne Geo · **13** NH-Kinder · **14** Hinweisdiagnostik · **15** BIT/Bio/Schmerz/Qigong · **16** Manuell/Lowen.
