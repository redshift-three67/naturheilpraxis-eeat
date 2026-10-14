# Ranking-Erstauswertung – GSC, Zielseiten und Wettbewerb

Arbeitsstand zur am 14.10.2026 begonnenen Untersuchung. Ausgewertete GSC-Daten reichen bis 12.10.2026. Frühere langfristige Verlustursachen sind noch nicht rekonstruierbar.

## Ergebnis

Es gibt jetzt einen gemessenen Sichtbarkeitsrückgang innerhalb der verfügbaren Historie. Der engste belastbare Ansatzpunkt ist die mobile Sichtbarkeit der Startseite für die exakte Anfrage „heilpraktiker augsburg“. Daneben sind die priorisierten Leistungsseiten für mehrere geprüfte lokale Anfragen deutlich schwächer vertreten als die Startseite. Die uneinheitliche interne Zuordnung von Diagnostik und Informationstherapie ist ein belegter Orientierungsfehler und eine zu prüfende SEO-Hypothese.

Keine Grundlage besteht bisher für die Behauptung, die Augustüberarbeitung, eine Google-Abstrafung, ein bestimmtes Update oder Keyword-Kannibalisierung verursache den gesamten Rückgang.

## 1. Vergleich gleich langer Zeiträume

Neu: **16.09.–12.10.2026**. Vorher: **20.08.–15.09.2026**. Beide Zeiträume enthalten 27 vollständige Kalendertage. Unterschiedlicher Wochentagsmix, Saison und Suchstandorte bleiben mögliche Einflüsse. Suchtyp Web.

| Umfang | Klicks vorher → neu | Impressionen vorher → neu | CTR vorher → neu | Durchschnittsposition vorher → neu |
|---|---:|---:|---:|---:|
| Alle Länder | 67 → 57 (−14,9 %) | 3.340 → 2.166 (−35,1 %) | 2,0 → 2,6 % | 15,7 → 12,0 |
| Deutschland | 65 → 52 (−20,0 %) | 2.853 → 1.940 (−32,0 %) | 2,3 → 2,7 % | 14,3 → 12,4 |

Die verbesserte globale Durchschnittsposition widerlegt den Sichtbarkeitsverlust nicht. Sie ist vom Query-Mix und von erfassten Impressionen abhängig. Deutschland ist außerdem keine auf Augsburg begrenzte Messung.

### Hauptanfrage „heilpraktiker augsburg“, Deutschland

GSC zeigt für diese exakte Anfrage in der Seitentabelle ausschließlich die Startseite.

| Gerät | Klicks vorher → neu | Impressionen vorher → neu | Durchschnittsposition vorher → neu |
|---|---:|---:|---:|
| Mobil | 5 → 3 | 356 → 143 (−59,8 %) | 2,7 → 5,0 |
| Computer | 0 → 0 | 167 → 86 (−48,5 %) | 7,4 → 7,6 |
| Tablet | 0 → 0 | 1 → 2 | 5,0 → 3,0 |
| Gesamt | 5 → 3 | 524 → 231 (−55,9 %) | 4,2 → 6,0 |

213 der netto 293 verlorenen Impressionen entfallen auf Mobilgeräte, rund 73 %. Das ist eine Verteilung des gemessenen Rückgangs, kein Nachweis eines mobilen Technikfehlers. Am Computer sinken Impressionen trotz nahezu gleicher Durchschnittsposition. Eine schlechtere Position erklärt daher nicht allein die Gesamtentwicklung. Die wenigen Klicks rechtfertigen keine belastbare Conversionaussage.

### Die umgekehrte Wortfolge

„augsburg heilpraktiker“ liegt im ungefilterten Queryvergleich bei 21,9 statt 17,8, mit 36 statt 13 Impressionen und jeweils null Klicks. Das passt eher zur Betreiberbeobachtung Seite 3 als der frühere Wert 4,9 für die andere Wortfolge, ist aber kein heutiger Augsburger Rang.

Deutschland, nach Gerät: Mobil 25 statt 11 Impressionen bei 25,3 statt 20,9; Computer 9 statt 1 Impression bei 16,7 statt 1,0. Insbesondere der Desktop-Vorwert aus einer einzigen Impression ist keine stabile Vergleichsbasis.

In der Seitentabelle erhält die Startseite die meisten Impressionen; Hypnotherapie und Psychotherapie erscheinen daneben bei wenigen Impressionen weit hinten. Mehrere ausgegebene URLs allein belegen keine schädliche Kannibalisierung. Property-, Query- und Seitenwerte dürfen wegen unterschiedlicher Aggregation nicht einfach addiert oder gleichgesetzt werden.

## 2. Leistungsseiten sind schwach vertreten

Deutschland, exakte Suchanfragen; Tabellenwerte aus der Seitendimension. Reihenfolge jeweils vorher → neu.

| Anfrage | Zielseite | Impressionen | Durchschnittsposition |
|---|---|---:|---:|
| bioresonanz augsburg | Startseite | 49 → 34 | 5,5 → 7,1 |
| bioresonanz augsburg | /bioresonanz-therapie/ | 17 → 13 | 41,3 → 39,0 |
| bioresonanztherapie augsburg | ausschließlich Startseite | 22 → 12 | 1,8 → 1,0 |
| naturheilkunde augsburg | Startseite | 17 → 9 | 11,5 → 15,2 |
| naturheilkunde augsburg | /naturheilkunde/ | 0 → 1 | keine → 57 |

Die starken Unterschiede zwischen Bioresonanz und Bioresonanztherapie verbieten eine pauschale Aussage zum ganzen Cluster. Die Bioresonanz-Leistungsseite ist für die geprüfte breitere lokale Anfrage schwach sichtbar; für die längere Variante wird nur die Startseite ausgegeben. Das begründet eine Prüfung von Seitenaufgabe, Inhalt und Verlinkung, aber noch keine Löschung oder Zusammenlegung.

Der allgemeine Diagnostik-Hub war im zuvor gespeicherten Google-Bericht nicht indexiert, obwohl der Live-Test Indexierung zulässt. Für die vorhandenen Diagnostik-, BIT- und NLS-Seiten muss deshalb zunächst eine eindeutige Rolle festgelegt werden.

## 3. Belegte Zuordnungs- und Inhaltsprobleme

Frisch öffentlich geprüft und im mobilen Menü nachvollzogen:

- Hauptmenü „Diagnostik“ → /diagnostik-informationstherapie/, deren Titel/H1 „Informationstherapie“ lautet.
- Inhaltslink „Diagnostik“ auf der Startseite → /nls-diagnostik/.
- Daneben existiert /naturheilkundliche-gesundheitsdiagnostik/ mit entsprechendem allgemeinem Titel.
- Das aktuelle Zusatzskript in [kindseiten-cluster.html](../../snippets/kindseiten-cluster.html) setzt NLS als übergeordneten „Diagnostik“-Einstieg für viele Verfahren und sogar für den allgemeinen Hub ein.
- „Vieva Plus Diagnostik“ im Footer führt zur Elektroakupunktur-Seite, obwohl eigene Vieva-Seiten vorhanden sind. Vor einer Korrektur ist das sachlich passende Ziel anhand des angebotenen Verfahrens festzulegen.
- Die Startseitenkachel zur Bioresonanz führt zur alten Vergleichsadresse, nicht direkt zur Bioresonanz-Leistungsseite. Ein Methodenvergleich und eine Leistungsbeschreibung brauchen unterschiedliche, klar erkennbare Aufgaben.
- Die Bioresonanzseite enthält gleichzeitig „Seit kurzem“, „Februar 2013“ und den allgemeinen Stand August 2026. Ein pauschales Standdatum belegt keine redaktionelle Aktualisierung dieses Abschnitts.

Der aktuelle Redirect /bioresonanz-versus-elektroakupunktur/ → /bioresonanz-und-elektroakupunktur/ funktioniert mit 301; das Ziel antwortet 200 mit passender selbstreferenzieller Canonical. Auch /bioresonanz-therapie/ antwortet 200 mit eigener Canonical. Die wenigen GSC-Impressionen der alten Adresse beweisen deshalb keinen gegenwärtigen Weiterleitungsfehler.

Diese Punkte begründen Korrekturen an Orientierung und inhaltlicher Klarheit. Ihr Anteil am historischen Rankingverlust ist nicht quantifiziert.

## 4. Vergleich mit tatsächlich sichtbaren Wettbewerbern

Grundlage ist die dokumentierte Google-Desktop-Stichprobe vom 14.10. für „heilpraktiker augsburg“, IP-Region 86156 Augsburg, pws=0, laut Google nicht personalisiert. Sie ist keine allgemeingültige Rangliste und keine Mobilmessung. Die früheren Zusatzkandidaten Storm, Wagner und Palat werden nicht als durch diese Hauptquery belegte Gewinner ausgegeben.

| Sichtbarer Kandidat | Konkret geprüfter Unterschied | Ableitung für Rauch |
|---|---|---|
| [Polinacea: Profil](https://www.polinacea-heilpraktiker.de/ueber-mich/), [Ablauf](https://www.polinacea-heilpraktiker.de/osteopathie/), [Kosten](https://www.polinacea-heilpraktiker.de/kostenuebernahme-2/) | Ausführlichere persönliche Qualifikationsdarstellung; Ablauf, Dauer und Osteopathiepreise konkret auffindbar. | Vorhandene Rauch-Erfahrungsangaben nachvollziehbar belegen; tatsächlichen Zeitbedarf und Kostenklärung für priorisierte Leistungen verständlich machen. Keine fremden Preise übernehmen. |
| [Natural Medical Coach](https://www.natural-medical-coach.de/), [Profil](https://www.natural-medical-coach.de/profil/persoenlich_kf/), [Labordiagnostik](https://www.natural-medical-coach.de/medizinische-leistungen/labordiagnostik/) | Team-/Qualifikationsprofile, Abfolge aus Anamnese, Untersuchung und Behandlung sowie eigene Leistungsdarstellung. | Einzelne Verfahren in ein verständliches Praxisangebot einordnen und die verantwortliche Person konkret zeigen. |
| [Haimerl](https://heilpraktiker-haimerl-augsburg.de/), [Profil](https://heilpraktiker-haimerl-augsburg.de/ueber-mich/), [Kontakt](https://heilpraktiker-haimerl-augsburg.de/kontakt/) | Stärkerer Zugang über Anliegen und Beschwerdebereiche; Profil und Terminweg sichtbar verknüpft. | Besucherfragen auf bestehenden Seiten beantworten. Kein daraus abgeleiteter Auftrag für eine neue Krankheitsseiten-Welle. |
| [Ruhl](https://www.naturheilpraxis-ruhl.de/), [Prüfer](https://praxis-pruefer.de/) | Direkt auffindbare Termin-/Preis- bzw. Gebührennavigation, Standort- und Praxisinformationen. | Einheitlichen Terminweg und erreichbare Kostenklärung prüfen; medizinische Versprechen nicht kopieren. |

Rauch besitzt bereits Standort-, Personen-, Ablauf- und Kostenhinweise. Die Unterschiede liegen in Konkretisierung, Zuordnung und Erkennbarkeit, nicht im vollständigen Fehlen solcher Informationen. Die Merkmale können Entscheidungen erleichtern; ein Ranking- oder Conversioneffekt ist damit nicht bewiesen.

## 5. Technik, Datenqualität und erledigte Quickwins

- GSC „Manuelle Maßnahmen“: Keine Probleme erkannt.
- GSC „Sicherheitsprobleme“: Keine Probleme erkannt. Das ersetzt keinen vollständigen Sicherheitsreview und schließt algorithmische Veränderungen nicht aus.
- In 362 sichtbaren Queryzeilen finden sich sechs Anfragen mit Operatoren wie site:/after:/before:. Sie liefern zusammen 112 statt 107 Impressionen und erklären den Gesamtrückgang mit netto +5 nicht. Nur relevante generische Querydaten und aggregierte Anomaliezahlen wurden im Repo gespeichert; kein vollständiger Suchanfragenexport. Weder Hack noch Manipulation ist daraus belegt.
- In der nach „rauch“ gefilterten Propertyauswahl wird nur die bekannte Domain-Property angeboten. Keine ältere URL-Property im zugänglichen Konto gefunden; außerhalb dieses Kontos vorhandene Exporte oder Properties bleiben offen.
- 390 × 844 Pixel Viewport: passende Viewport-Metaangabe, H1 innerhalb der Inhaltsbreite, kein horizontaler Dokumentüberlauf, mobiles Menü öffnet. Prüfung in angemeldeter WordPress-Sitzung mit Adminleiste, ohne Smartphone-User-Agent-/Touch-Emulation. Kein öffentlicher Ladezeit-, CWV- oder Googlebot-Renderingnachweis. Temporäre Browsergröße zurückgesetzt.
- Die aktuelle Sitemap steht nun in der frisch geladenen GSC-Übersicht als **Erfolgreich, 64 erkannte Seiten**. Der frühere Verarbeitungswiderspruch ist aufgelöst; das ist keine Bestätigung von 64 indexierten Seiten.
- Praxiszeiten nach frischem Laden: als aktueller Stand im Profil gespeichert, ohne Ausstehendhinweis; Mo–Fr 10:00–12:30 und 13:00–19:00, Sa/So geschlossen. Die vollständige öffentliche Ausspielung aller Tage wurde nicht separat verifiziert.
- Kein erneuter Indexierungsantrag, keine Pluginupdates, keine neuen Weiterleitungen und keine weiteren Live-Inhaltsänderungen in dieser Diagnosephase.

## 6. Konsequente Reihenfolge für die Umsetzung

1. **Mobile Hauptquery vertiefen:** Tages-/Wochenverlauf der Startseite für die exakte lokale Hauptanfrage, öffentliche mobile Darstellung und vorhandene mobile CWV-Daten zusammenführen. Vergleichbare Augsburger Mobil-SERPs getrennt vom jetzigen Desktopbefund dokumentieren. Ziel ist eine Erklärung für den gemessenen mobilen Schwerpunkt, keine vorweggenommene Technikdiagnose.
2. **Eindeutige Seitenrollen und Linkziele:** Startseite = Praxiswahl Augsburg; Bioresonanzseite = konkretes Angebot; Vergleichsseite = Methodenvergleich; Naturheilkunde = Übersicht der Verfahren. Allgemeine Diagnostik, NLS und BIT/Informationstherapie nach Inhaltsprüfung sauber voneinander abgrenzen. Keine URLs zusammenlegen, bevor deren Inhalt, bestehende Sichtbarkeit und gewünschte Funktion geprüft sind.
3. **Kleine, gesicherte Korrekturen:** tatsächliche Fehlzuordnungen wie Vieva/EAV sowie irreführende Bioresonanz-Kacheln korrigieren; Vorherstand sichern, Zielseiten lesen, getrennte Änderungen verifizieren. Veraltete Zeitformulierungen sachlich überarbeiten. Download-Dokumente erst nach gültiger Versionszuordnung reparieren.
4. **Priorisierte Leistungsseiten aufwerten:** konkrete Leistung, Augsburg/Hochzoll, verantwortliche Person, belegbare Erfahrung, typischer Ablauf, Dauer/Kostenklärung, Grenzen und klarer Terminschritt. Vorhandenes verbessern, keine künstlichen medizinischen Behauptungen oder Ortsseiten ergänzen.
5. **Messen und erst danach Strukturumbau:** jede Änderung protokollieren und mit vergleichbaren Zeitfenstern bewerten. Historische Ursache vor August weiterhin als offen ausweisen. Die spätere EEAT-Weiterentwicklung separat begründen.

Ergebnis dieses Arbeitspakets ist eine belastbarere Priorisierung, nicht eine bereits abschließend bewiesene Hauptursache oder eine Rankinggarantie.

## Nachweise

Maschinenlesbare, begrenzte GSC-Auszüge und Statusbeobachtungen: [Ranking-Nachweise](../../archive/2026-10-14/ranking-analysis/). Grundlage und ursprünglicher Untersuchungsplan: [Rankingplan](2026-10-14-rankingverlust-plan.md).

Sol high prüfte die aktuelle Link-/Seitenzuordnung und Redirects. Luna max vertiefte die im echten SERP-Sample sichtbaren Wettbewerber. Astra medium prüfte die Interpretationsgrenzen und Priorisierung unabhängig.

Methodische Primärquellen: [Google: Traffic-Rückgänge](https://developers.google.com/search/docs/monitor-debug/debugging-search-traffic-drops), [Google: Positionen und Impressionen](https://support.google.com/webmasters/answer/7042828?hl=de).
