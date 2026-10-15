# STATUS – rauch-heilpraktiker.de (LLM + Entwickler)

## PAUSE – Sicherungspunkt 15.10.2026

Arbeit auf ausdrücklichen Betreiberwunsch pausiert. Keine Fortsetzung oder Hintergrundüberwachung ohne neuen Auftrag. Stand, offene Punkte und Wiederaufnahme: [Sicherungspunkt](../archive/2026-10-15/CHECKPOINT-PAUSE.md). Git-Markierung: checkpoint-2026-10-15-pause. Private verschlüsselte Zusatzsicherung außerhalb Git; vorhandene fremde Arbeitsdatei unverändert erhalten.



## Ranking-Erstauswertung und Quickwin-Verifizierung

Verglichen wurden 16.09.–12.10.2026 und 20.08.–15.09.2026, je 27 Tage. Deutschland: Klicks 65→52, Impressionen 2.853→1.940. Exakte Anfrage heilpraktiker augsburg: Startseite als einzige Zielseite; mobil Impressionen 356→143, Durchschnittsposition 2,7→5,0. Das belegt den mobilen Schwerpunkt, aber keinen mobilen Technikfehler. Leistungsseiten für Bioresonanz/Naturheilkunde sind gegenüber der Startseite schwach sichtbar; uneinheitliche Diagnostik-Linkziele sind frisch belegt. Keine pauschale Kannibalisierungs- oder Abstrafungsdiagnose.

Sitemap nun in GSC erfolgreich mit 64 erkannten Seiten, früherer Statuswiderspruch aufgelöst. Bestätigte Praxiszeiten stehen nach Reload als aktueller Profilstand ohne Ausstehendhinweis; öffentliche Wochenübersicht nicht vollständig separat geprüft. GSC meldet keine manuellen Maßnahmen und keine Sicherheitsprobleme. Vollständiger Bericht: [Ranking-Erstauswertung](reviews/2026-10-14-ranking-erstauswertung.md).

Nächste Priorität: mobile Hauptquery zeitlich und öffentlich vertiefen, danach eindeutige Seitenrollen und gesicherte Linkkorrekturen. Keine weiteren Live-Inhaltsänderungen in diesem Arbeitspaket.


Planpriorität ergänzt: Rankingverluste zunächst je Suchanfrage, URL und Zeitraum belegen und mit reproduzierbar erhobenen organischen Top Ten vergleichen; Maps getrennt. Erste GSC-Werte sind keine Verlustzeitreihe. Siehe [Ursachenanalyse und Wettbewerbsplan](reviews/2026-10-14-rankingverlust-plan.md).

Betreiberbeobachtung ergänzt: länger bestehender Rückgang, aktuell Seite 3. GSC 4,9 ist ein impressionsbasierter Zeitraumdurchschnitt und widerlegt dies nicht. Direkte Google-Desktop-Stichprobe: Rauch in separater lokaler Liste, nicht in den allgemeinen Webtreffern auf Seite 1; Details und Grenzen im verlinkten Rankingplan.

## SEO-Quickwins am 14.10.2026

Aktuelle Sitemap mit 64 geprüften Seiten einmal in GSC eingereicht. Detailbericht: fehlerfrei verarbeitet, noch 0 Seiten; Übersicht weiterhin Abruffehler. Verarbeitung der untergeordneten Sitemap bleibt offen. Praxiszeiten nach Betreiberbestätigung gespeichert: Mo–Fr 10:00–12:30 und 13:00–19:00, Sa/So geschlossen; Google-Prüfung ausstehend, Termin erforderlich erhalten. Diagnose-Hub: Google-Live-Test bestanden; ein Indexierungsantrag wegen reCAPTCHA-Verbindungsfehler gescheitert, keine erfolgreiche Einreichung behaupten.

Nächster gezielter Schritt: Freigaben/Verarbeitung kontrollieren, GSC-Leistung auswerten und gültige Download-Dokumente zuordnen. Bericht: [SEO-Quickwins](reviews/2026-10-14-seo-quickwins.md). Keine Plugin-/Schema-/Inhaltsänderungen in diesem Batch. Frühere Aussagen „nur alte Sitemap“ und „keine Profiländerung“ unten sind durch diesen Stand ersetzt. Der alte Mailrelay-Editor wurde bereits ohne Speichern geschlossen.



## Mailrelay-Antworten: weiterer Live-Schritt am 14.10.2026

Fünf rohe SMTP-Fehlerwerte in JSON-Antworten durch einen festen String ersetzt. Antwortstruktur und Transport bleiben erhalten. Original: fünf Canary-Offenlegungen in sieben Szenarien; Patch: sieben Szenarien bestanden, vollständige PHP-Grammatik geprüft. Vorheriger Stand zusätzlich verschlüsselt gesichert; Live-Quelltext nach Speichern erneut abgeglichen, GET 405. Alter Editor vom Nutzer ohne Speichern geschlossen; neuer Prüfeditor abschließend geschlossen.

Details: [SMTP-Antworten](reviews/2026-10-14-mailrelay-response-errors.md). Offen: produktiver Versandtest, tatsächlicher Client-Umgang mit Erfolg ohne vorgesehenen Anhang, weitere Ausgabepfade und Zugangsdatenrotation. Keine weiteren SEO-/Profil-/Pluginänderungen.



## Aktueller Zusatzstand 14.10.2026

- Provider-Backups: täglich; erfolgreiche komplette Wiederherstellung vom Betreiber bestätigt.
- Mailrelay: zentrale Datei-Debugprotokollierung gezielt abgeschaltet und live erneut eingelesen; unveränderte verschlüsselte Sicherung außerhalb Git vorhanden.
- Regressionstest: Original FAIL, Ersatzfunktion PASS (11 Prüfungen). Vollständige Datei mit PHP 8.2 im Speicher syntaktisch geprüft, außerhalb der Loggerfunktion identisch.
- Relay-GET: 405. Log-HEAD: 403; keine Log-Inhalte öffentlich abgerufen. Kein vollständiger Versandtest.
- WordPress, GSC und Unternehmensprofil sind über Chrome erreichbar. GSC: nur alte sitemap.xml eingereicht; Diagnose-Hub derzeit nicht indexiert. Weitere Optimierungen bisher nicht umgesetzt.
- Details und Grenzen: [Mailrelay-Prüfbericht](reviews/2026-10-14-mailrelay-debuglog.md).
- Alten ursprünglichen Editor ohne Speichern schließen; seine Browsersteuerung war abgebrochen. Verifiziert ist die Speicherung über den frischen Tab.

Die folgenden Abschnitte dokumentieren den historischen Stand vom 20.08.2026. Bei abweichenden aktuellen Messungen gilt der neue Prüfbericht.

**Stand:** 2026-08-20  
**Domain:** https://rauch-heilpraktiker.de  
**Repo:** https://github.com/redshift-three67/naturheilpraxis-eeat · Branch `main`  
**Diese Datei ist die aktuelle Wahrheit für erledigt / offen / nächster Schritt.**  
Ältere Dateien (`CURRENT.md` mit Datum 14.–17.08., `PROMPT-FORTSETZUNG.md` historisch) **nicht** als offenen Auftrag lesen.

## Phase jetzt

**PAUSE / Messung.** Keine Site-Writes. Keine Ads. Keine neue Schrift. Keine Breitenberger-Inhaltswelle.

## Lesereihenfolge (LLM)

1. Diese Datei  
2. `docs/WORKFLOW.md`  
3. `docs/entwickler-handover-eeat-2026-08/README.md`  
4. Bei Site-Änderung: `docs/SCHEMA-STRATEGY.md` + `snippets/`  
5. Archive nur bei Rollback oder Nachvollzug: `archive/YYYY-MM-DD/`

Live-Tiefenanalyse mit Frontend-Verifikation: `docs/LIVE-ANALYSE-2026-08-28.md` (bestätigt Phasen 0–14 live; neue Kleinbefunde → Tabelle unten).

Nächstes **anderes** Projekt: sunclinic.ch → zuerst  
`docs/entwickler-handover-eeat-2026-08/08-uebertragbare-erkenntnisse.md`  
CDP **9225**, Rauch-Snippets nicht kopieren.

## Erledigt (nicht zurückdrehen, nicht erneut bauen)

| Block | Inhalt |
|-------|--------|
| Schema | HFCM **#6** 1× MedicalClinic+Physician; Geo 48.339465 / 10.948931; Hours; areaServed. #5 OFF. snip pro / Schema-Plugin OFF. Rank Math Local SEO OFF |
| Disclaimer | Nur HFCM **#7**; FAQ 01–06 + FAQPage; NAP Hochzoll 19a |
| Meta/Index | Rank Math Titles/Metas YMYL; Sitemap `sitemap_index.xml` (64 https); noindex-Plugin aus; Corona-Seite noindex |
| Hubs | HUB-01…07; Titles/H1 `[Verfahren] in Augsburg`; Start = Pillar „Heilpraktiker Augsburg“ |
| Texte | VERF-01…18; Wellen 13–16 Kindseiten; Cluster HFCM **#13** |
| Anamnese | Hub `/online-anamnesebogen/` (WP 6705); Menü 12+39 → Hub; App nur `.eeat-anamnese-app-link`; Slider = Klon `/bioresonanz-therapie/` |
| UX/Typo | Eine Skala `eeat-type-a`; Local-Bar Start+Hubs; 44 px; leere Panels zu; Hub-Punkt im Menü |
| Speed | HFCM **#9** LCP; Super Cache Simple + Excludes; Kenburns mobil aus; Slider mobil 240 |
| Legal | HFCM **#14** Corona-Hinweis; Versus-Slug + 301 |
| GBP 19.08. | Pin 19a, Zeiten Mo–Fr 10–12:30/13–19, Einzugsgebiet nicht nur Friedberg (86163 + 86316 + 86165), Haupt Heilpraktiker, Neben Naturheilpraktiker, Attribute wahr, keine Notfallhilfe, kein Seefelder-Duplikat |
| Beschlüsse | Hochzoll/Friedberg/Lechhausen **nicht** in Titles stopfen. Breitenberger-Maschine **nicht** bauen. Neue Schrift **kein** E-E-A-T-Rest |

Handoff-Tabellen: `docs/entwickler-handover-eeat-2026-08/01-phasenuebersicht.md` und `02-schritte-detailliert.md` · CSV `schritte.csv`.

## Offen (kein Site-Write ohne neuen Auftrag)

| ID | Wer | Was |
|----|-----|-----|
| **GSC-PACK** | Auftraggeber + Auswertung | 28-Tage GSC (Suchanfragen, Seiten, Start-Queries, Mobil) + 2 Pack-Screens `heilpraktiker augsburg` |
| **SEM** | danach entscheiden | Such-Pilot nur wenn Pack/GSC es tragen; Start+Hubs; keine Heilzusagen |
| **REVIEWS** | Betreiber | Neutral um Bewertung bitten, keine Vorlage |
| **CITATIONS** | Betreiber | Apple/Bing = dieselbe NAP |
| **DL** | Betreiber | Tote `/download/…` hochladen oder Buttons weg |
| **CORONA** | Betreiber | Menüpunkt lassen oder raus (Seite ist noindex) |
| **QUALI** | Betreiber | Fortbildungen nur mit Nachweisen |
| **WV-RM** | unberührt | Rank-Math-Article-JSON roh; sichtbarer Claim im DOM weg. **28.08. live bestätigt:** rohe description enthält „sanfte, ganzheitliche Medizin"/„NLS Diagnose" (→ WVRM2 in der Analyse) |
| **OGA** | Wiedervorlage | `og:image:alt` der Startseite = „…_Sanft_Heilen_Stark_im_Leben" – Rank-Math-Social-Feld setzen (1 Write) |
| **ODP** | Wiedervorlage | SVG-Preload (`data-od-added-tag`) noch live – Plugin „Optimization Detective" nicht in der Plugin-Doku; klären (dokumentieren oder aus) |
| **UCASE** | Wiedervorlage | `/NLS-DIAGNOSTIK/` → 200 mit korrektem lowercase-Canonical; 301 optional |
| **GAP-AUTOR** | Wiedervorlage | Keine Autor-/Werdegang-Seite in der Sitemap; größter offener E-E-A-T-Hebel, blocked an QUALI-Nachweise |
| **FONT / REBRAND / LLMS** | Wiedervorlage | bewusst nicht jetzt |

## Nächster Schritt (genau einer)

1. Auftraggeber liefert GSC-Ausschnitte + Pack-Screens (Anleitung in der Session 20.08., nicht im Code).  
2. LLM/Entwickler wertet aus: greift die Pillar, haben Hubs Impressionen, zeigt das Pack Zeiten?  
3. **Nur dann** Ads-Ja/Nein oder ein gezielter Site-Fix. Sonst weiter Pause.

## Verbote (weiter gültig)

Kein zweites Disclaimer, keine Pillar `/heilpraktiker-augsburg/`, kein Hub-Title „Heilpraktiker Augsburg“, kein Product/Service-Schema, keine Ratgeber-Farm, keine Symptom-Money-Pages, CDP 9224 nicht mit 9223/9225 teilen, `?s=1` nicht als Cache-Bust.

## CDP / Live-Änderung (nur nach Auftrag)

Port `127.0.0.1:9224`. Prewrite → ein Schritt → Verify → Archiv + diese STATUS-Datei + `CURRENT.md` + Push nach GitHub.
