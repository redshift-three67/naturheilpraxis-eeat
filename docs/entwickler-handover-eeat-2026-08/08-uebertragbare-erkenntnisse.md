# 08 – Übertragbare Erkenntnisse (für sunclinic.ch und andere YMYL-Sites)

**Zweck:** Was aus rauch-heilpraktiker.de **prinzipiell** gilt. Nicht klonen: Augsburg, Hochzoll, Heilpraktiker-Texte, Lovable-App, YOO-Folien, HFCM-IDs.

**Nächstes Projekt:** sunclinic.ch (bereits begonnen). CDP-Port dort **9225**, nicht 9224 (Rauch) und nicht 9223 (Lovable).

Knowledge-Basis über Projekte: https://github.com/redshift-three67/eeat-optimierung  
Rauch-Repo bleibt die Referenz **nur für diese Domain**.

## Übernehmen (Prinzip)

| Thema | Erkenntnis | Anwendung woanders |
|-------|------------|-------------------|
| Ein Fachschema | Ein Medical/Clinic-Graph, keine parallelen Schema-Plugins | Zuerst Schema-Quellen zählen, Duplikate aus |
| Ein Disclaimer | Sitewide eine Box; kein zweiter Satz in jedem Verfahren | Gleiche Disclaimersprache, lokal anpassen |
| NAP = sichtbarer Text | Schema nur Daten, die auf der Seite stehen | Adresse, Tel, Zeiten, Geo nicht „schöner rechnen“ |
| Echte Lage | Standort nicht zur Stadtmitte ziehen, wenn die Praxis es nicht ist | Catchment = echte Nachbarorte |
| GBP = Site | Pin, Zeiten, Tel, URL, Kategorie identisch zur Site | Profil vor Ads; Stunden im Pack schlagen FAQ |
| Eine Hauptkategorie | Berufsname primär, branchenübliche Google-Kategorie sekundär | Keine Arzt-Kategorie ohne Arzt-Zulassung |
| Attribute | Nur Wahrheit; Notfallhilfe nicht, wenn die Site 112 verweist | Keine Kinder-/Barriere-Häkchen raten |
| Pillar vs. Hubs | Eine URL für das Hauptkeyword; Hubs `[Verfahren] + Ort` | Keine zweite Startseite |
| App / Fremdsystem | Erklärseite auf der eigenen Domain, dann die App | Kein Menü direkt in ein Dritt-Frontend |
| FAQ | Wenige sichtbare Q/A + passendes FAQPage; Arzt / Termin / Notfall / Kosten / Lage | Keine Glossar-Farm |
| Typo | Eine Skala, Kontrast, 44-px-Taps | **Keine** neue Schriftfamilie als E-E-A-T-Pflicht |
| Speed | Ein Cache, LCP-Bild des ersten Slides, keine fünf Speed-Plugins | Excludes für Kontakt/Login |
| Ads | Such-Pilot, Start+Hubs, keine Heilzusagen, Geo = echter Umkreis | Nach stabilem GBP, nicht am selben Tag |
| Workflow | Prewrite → ein Live-Schritt → Verify → Archiv | CDP-Port nie teilen |

## Nicht übernehmen (Rauch-spezifisch)

- Texte zu Bioresonanz, NLS, Metatron Hospital, Trikombin, Anamnese-Lovable.  
- Hub-Slug-Liste, Menü-IDs 12/39, HFCM #6–#17, WP-Seite 6705.  
- Slogan „Naturheilkundlich begleiten – Stark im Leben“.  
- Local-Bar-Zeiten Mo–Fr 10–12:30 / 13–19 – nur wenn sunclinic **dieselben** Stunden hat.  
- Kategorie Heilpraktiker / Naturheilpraktiker – sunclinic braucht **ihre** Berufs- und Google-Kategorien.  
- HWG-Deutschland 1:1; in der CH gelten Heilmittelwerbung / MedBG analog, nicht identisch – Claims trotzdem nicht erfinden.

## GBP-Checkliste (projektneutral)

1. Ein Profil, kein Alt-Standort.  
2. Adresse öffentlich, Pin auf dem Gebäude.  
3. Zeiten = Site, Mittagspause als zwei Intervalle wenn so gearbeitet wird.  
4. Einzugsgebiet: eigene PLZ zuerst, Nachbarorte dazu, nicht nur ein Vorort.  
5. Hauptkategorie = was die Praxis **ist**; 1–2 Nebenkategorien aus derselben Branche.  
6. Attribute: Termin/Parken/Zahlung nur wahr; Notfall leer wenn kein Notfallbetrieb.  
7. Website-Feld = kanonische Domain, nicht Buchungs-App.  
8. 1–2 Wochen beobachten, dann optional Suchanzeigen.

## Ads-Pilot (projektneutral)

- Nur Search. Landings: Start + wenige Hubs, die die Anzeige nennt.  
- Texte: Name, Ort, Termin, „ersetzt keinen Arzt“ o. ä. – keine Diagnose/Heilung.  
- Geo: Umkreis der Praxis, nicht die ganze Region als Fake-Innenstadt.  
- Klein starten, Anruf + Kontakt messen.

## Typografie (E-E-A-T)

Google rankt keine Font-Datei. Pflicht ist Lesbarkeit: eine Hierarchie, ausreichende Größe, Kontrast, Tap-Ziele. Neue Familie nur als Rebrand nach Abschluss, nie mitten in den Wellen.

## Technik-Disziplin

| | Rauch | Sunclinic (nicht verwechseln) |
|--|-------|-------------------------------|
| CDP | 127.0.0.1:**9224** | **9225** |
| Repo | naturheilpraxis-eeat | eigenes Sunclinic-Repo |
| Theme | YOOtheme WP | was dort live ist – nicht voraussetzen |

Vor dem ersten Sunclinic-Write: dortiges CURRENT/PLAN und Schema-Iststand lesen. Rauch-Snippets nicht in die CH-Site kopieren.
