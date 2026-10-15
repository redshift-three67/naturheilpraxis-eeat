# Patientenwege und Startseitenkarten – 15.10.2026

## Ergebnis

Drei bestehende Home-Karten wurden nach Sicherung im aktiven YOOtheme-Layout überarbeitet und über „Layout speichern“ veröffentlicht. Der öffentliche Vorher-/Nachher-Vergleich zeigt genau drei geänderte Linktexte bei identischen Linkzielen und identischer Reihenfolge aller Linkziele. Startseiten-Titel, H1, Canonical und Robots sind unverändert. Aktuell drei JSON-LD-Blöcke, wie beim vorherigen verifizierten Stand; deren vollständiger Inhalt wurde nicht verglichen.

| Karte | Vorher | Live jetzt |
|---|---|---|
| BIT | Zugehörigkeit zur „Holistischen Medizin“, ohne Erklärung der Praxisverwendung | „Unter Biophysikalischer Informationstherapie (BIT) fasse ich mehrere Verfahren meiner Praxis zusammen. Hier erfahren Sie mehr dazu.“ |
| Bioresonanztherapie nach Baklayan | „Entdecken Sie die positive Wirkung von Bioresonanztherapie auf Ihren Körper und Geist.“ | „Informationen zur Bioresonanztherapie nach Baklayan.“ |
| Vieva | Titel „Vitalfeldtherapie“, Beschreibung einer Vitalfeldanalyse, Ziel jedoch HRV-Seite | Titel „Vieva Pro – Herzratenvariabilität“; „Informationen zu Vieva Pro, Herzratenvariabilität (HRV) und Biofeedback in meiner Praxis.“ |

Beim Vieva-Eintrag wurden auch das zugehörige Meta-Feld und das hinterlegte Bild-Alt-Feld passend benannt. Das Bild ist im aktuellen Grid ausgeblendet; keine Bilddatei ersetzt. Die übrigen Felder, das HRV-Ziel sowie die separate Vital-/Nährstoffkarte und der Footer bleiben erhalten. Der Baklayan-Link zeigt weiterhin auf das zuvor korrigierte Leistungsziel. Keine neue Wirkungs-, Diagnose- oder Rankingzusage.

In einem zweiten getrennten Live-Schritt wurden anschließend auf der BIT-Seite zwei Absätze an den bestätigten Oberbegriff angepasst. Der öffentliche Absatzvergleich zeigt genau zwei neue und zwei entfernte Absätze; Titel, sämtliche H1–H3-Texte, Canonical, Robots, Schema-Anzahl und alle Linktexte/-ziele sind unverändert. Die gesonderte vorhandene Einordnung zur Erfahrungsheilkunde/nicht schulmedizinischen Anerkennung und der abschließende Absatz zur Entscheidung nach Anamnese ohne Ergebniszusage bleiben erhalten.

## Nachweise und Rückweg

Aktive Quelle: Home Post 17; Grid BIT/Baklayan sowie Grid NLS/Vieva. Vor dem jeweiligen Eingriff wurden alle sichtbaren Kartenfelder und das originale Editor-HTML archiviert:

- [BIT vorher](../../archive/2026-10-15/prewrite/patientenwege/bit-card.json)
- [Baklayan vorher](../../archive/2026-10-15/prewrite/patientenwege/baklayan-card.json)
- [Vieva vorher](../../archive/2026-10-15/prewrite/patientenwege/vieva-card.json)
- [Öffentlicher Vorherstand](../../archive/2026-10-15/prewrite/patientenwege/home-links-and-seo.json)
- [Öffentliche Verifizierung](../../archive/2026-10-15/patientenwege/home-verification.json)
- [Desktop BIT/Baklayan](../../archive/2026-10-15/patientenwege/home-bit-baklayan-desktop.jpg), [Desktop Vieva](../../archive/2026-10-15/patientenwege/home-vieva-desktop.jpg)
- [Aktives BIT-Textfeld vorher](../../archive/2026-10-15/prewrite/patientenwege/bit-page-text-before.json), [öffentliche BIT-Baseline](../../archive/2026-10-15/prewrite/patientenwege/bit-public-before.json)
- [BIT-Textfeld nachher](../../archive/2026-10-15/patientenwege/bit-page-text-after.html), [öffentlicher Absatzvergleich](../../archive/2026-10-15/patientenwege/bit-verification.json), [BIT-Screenshot mit erhaltenem Hinweis](../../archive/2026-10-15/patientenwege/bit-live-desktop.jpg)

Rückweg: im aktiven Home-Layout ausschließlich die betroffenen Kartenfelder aus den JSON-Sicherungen wieder einsetzen, für die Beschreibungen das gesicherte HTML im Editor verwenden, Layout speichern und öffentlich prüfen. Kein fremdes Home-Duplikat veröffentlichen.

BIT-Rückweg: ausschließlich das erste Text-Element nach dem Grid im aktiven BIT-Layout mit dem gesicherten Original-HTML wiederherstellen, Layout speichern und öffentlich prüfen. Das separate Hinweis-Element nicht ersetzen. Der HTML-Readback wurde vor Veröffentlichung exakt abgeglichen; nach Speicherung verschwand „Layout speichern“, der Customizer zeigte „Veröffentlicht“ deaktiviert. Anschließend öffentlicher Reload mit dem protokollierten Absatzvergleich.

Die Desktopansicht wurde visuell kontrolliert. Ein angeforderter 390-Pixel-Viewport wurde von der aktuellen Browserverbindung nicht wirksam übernommen; tatsächlich blieb die Breite 1.482 Pixel. Deshalb keine erfolgreiche Mobilprüfung behaupten. Der temporäre Override ist zurückgesetzt. Mobile Umbruchkontrolle bleibt offen; CSS wurde nicht geändert.

## Frischer Abgleich der drei Schwerpunkte

Vier öffentliche Seiten direkt gelesen; [gerenderte Ausgangsbefunde](../../archive/2026-10-15/patientenwege/roles-baseline.json). Die Darstellung unten beschreibt die Website, keine medizinische Validierung ihrer Verfahren.

| Bereich | Tatsächlicher Bestand | Konsequenz |
|---|---|---|
| Allgemeiner Diagnostikzugang | Hauptmenü → `/diagnostik-informationstherapie/`; Home-Text „Diagnostik“ → `/nls-diagnostik/` | Allgemeine Übersicht und einzelne Methode noch uneinheitlich. Menü und Home erst nach Inhaltsabgrenzung auf denselben geeigneten Einstieg richten. |
| Gesundheitsdiagnostik | `/naturheilkundliche-gesundheitsdiagnostik/` beschreibt ergänzende Hinweise, nennt zugleich Labor und ordnet die diagnostische Geräteliste unter BIT ein. Slider beginnt mit NLS | Inhalt vor stärkerer Verlinkung präzisieren: Gespräch/Anamnese, Untersuchung/Labor und nicht gleichwertige ergänzende Verfahren getrennt erklären. Laborangebot und tatsächlicher Ablauf nicht erfinden. |
| Informationstherapie | `/diagnostik-informationstherapie/` ordnet BIT, EAV und NLS unter sich ein und schickt zum Einstieg wieder auf NLS | Nicht parallel als allgemeine Diagnostikübersicht ausbauen. Begriffliche Rolle gegenüber der vom Betreiber bestätigten BIT-Verwendung klären. Keine Zusammenlegung oder Weiterleitung allein aus diesem Befund. |
| BIT | Betreiber bestätigt Oberbegriff. `/biophysikalische-informationstherapie-bit/` nannte BIT ein einzelnes Verfahren und beschrieb gemeinsame elektromagnetische Signale/Systeminformationen | Zwei Absätze jetzt live angeglichen; keine gemeinsame mechanistische Aussage mehr in diesem Textfeld. Konkrete Kinderzuordnung nicht aus der vorhandenen 13er-Clusterliste ableiten. Weitere Überschriften, Slider und Verlinkung bleiben separat zu prüfen. |
| Naturheilkunde | `/naturheilkunde/` besitzt bereits einen Einstieg mit sechs direkten Leistungslinks sowie Erläuterungen | Vorhandenen Einstieg erhalten und gezielt präzisieren. Neu aufgefallen: Slider „Klassische Homöopathie nach Hahnemann“ verlinkt `/psychotherapie-hypnosetherapie-und-burnout/`. Aktive Sliderquelle und Zielseite vor Korrektur prüfen; heute nicht geändert. |

Die Hauptmenüpunkte öffnen im geprüften Desktopzustand auch Untermenüs; ein einfacher Klick navigierte nicht unmittelbar zur hinterlegten Übersichts-URL. Die Zielseiten wurden deshalb über die tatsächlich sichtbaren hrefs direkt aufgerufen. Menü-Interaktion künftig auf Desktop und Mobil gesondert abnehmen, nicht nur die gespeicherten URLs vergleichen.

## Konkrete nächste Pakete

1. **BIT-Einleitung angeglichen und geprüft:** die zwei widersprüchlichen Absätze sind durch die unten dokumentierten sachlichen Absätze ersetzt. Die gesonderte Einordnung und individuelle Entscheidung ohne Ergebniszusage bleiben erhalten. Weitergehende Ausarbeitung der BIT-Übersicht erst nach gesicherter Zuordnung einzelner Angebote.
2. **Allgemeine Diagnostikübersicht lesbar aufbauen:** vorhandene Angebote und Abläufe abgleichen; Labor nicht mit NLS/EAV/Vitalfeld gleichsetzen. Erst nach dieser redaktionellen Prüfung allgemeine Menü-/Homezugänge vereinheitlichen. Namentliche NLS-Links bleiben spezifisch.
3. **HFCM #13 getrennt korrigieren:** nach bestätigter Eignung der Gesundheitsdiagnostikseite als allgemeiner Hub diese anstelle NLS als Übersicht verwenden; NLS als einzelner Eintrag und eigene MAP-Seite; keine hub-/extra-/items-Selbstlinks. Aktuelle kanonische Datei `snippets/kindseiten-cluster.html`: DIAG-Liste ab Zeile 34, NLS-Hubzuordnung ab Zeile 101, hub-Renderer ab Zeile 228; nur items überspringen heute Selbstlinks. Auch `snippets/local-action-bar.html` ab Zeile 117 mitprüfen: NLS ist dort als Hub markiert. Nicht nur global URLs ersetzen. Vor Livegang aktuellen HFCM-Quelltext mit Repo abgleichen, sichern, relevante Seiten lokal und öffentlich testen.
4. **Naturheilkunde-Sliderlink:** eindeutig falsche Zuordnung nach Quellenprüfung separat korrigieren. Anschließend vorhandene Ersttermin-/Qualifikations-/Kosteninformationen patientengerecht präzisieren. Keine erfundenen Preise oder Qualifikationen.

### Veröffentlichtes BIT-Textfeld

Ersatz für die zwei genannten Absätze, keine komplette Seitenneufassung:

> Unter Biophysikalischer Informationstherapie (BIT) fasse ich in meiner Praxis mehrere Verfahren zusammen.
>
> Die einzelnen Verfahren werden auf den jeweiligen Leistungsseiten beschrieben.

Es wurden keine neuen Einzelmethoden zugeordnet oder Links eingefügt. Die zunächst erwogene zusätzliche Aussage „keine separat angebotene einzelne Anwendung“ und das Baklayan-Beispiel wurden nach Gegenprüfung nicht übernommen: Die bestätigte Oberbegriffsverwendung genügt für die erste Formulierung, ein Sliderlink allein trägt keine vollständige fachliche Zuordnung. Der nachfolgende bestehende Absatz zur individuellen Entscheidung nach Anamnese und ohne zugesagtes Behandlungsergebnis bleibt erhalten. Auch der davorstehende eigenständige Anerkennungs-/Erfahrungsheilkunde-Hinweis ist unverändert. Für neue oder weitergehende medizinische Aussagen ist eine eigene Quellenprüfung nötig; diese Änderung bestätigt keine Wirksamkeit.

### Behobene Bearbeitungsgrenze

Nach dem erfolgreichen Homepaket blieb die BIT-Vorschau über den offiziellen „Anpassen“-Link zunächst leer; „Builder ist auf dieser Seite nicht verfügbar“ erschien auch nach einem normalen Reload. Erst nachdem der Betreiber dieselbe BIT-Customizer-Seite manuell geöffnet hatte, waren Vorschau und aktives Layout verfügbar. Vor diesem Zeitpunkt wurde dort nichts gespeichert. Danach Originaltext gesichert, die zwei Absätze ersetzt und öffentlich verifiziert. Keine Theme-/Pluginänderung und kein Schreibumweg über interne Zustände. Die genaue Ursache des Unterschieds zwischen automatischer und manueller Navigation bleibt ungeklärt; nicht als behobener Server-/Themefehler ausgeben.

## Einordnung und unabhängige Kontrolle

Das enge Textpaket löst konkrete Bezeichnungs- und Erwartungsfehler. Beschreibende, zum Ziel passende Linktexte entsprechen [Googles Linkempfehlungen](https://developers.google.com/search/docs/crawling-indexing/links-crawlable). Daraus folgt keine gemessene Rankingwirkung und keine nachgewiesene Hauptursache für die Betreiberbeobachtung Platz 32.

GPT-6 Luna max hat die lokale Cluster-/Navigationslogik unabhängig lesend geprüft. GPT-6 Astra medium hat die vorgesehenen drei Kartentexte anhand der vom Hauptagenten übermittelten Livebefunde gegengeprüft: „mehr dazu“ statt noch nicht vorhandener Übersicht und schlichte Baklayan-Beschreibung statt ungesicherter Inhaltszusage. Beide Hinweise sind umgesetzt. Keine unabhängige Live-Reproduktion durch diese Agenten. Keine Cloud-VM und kein Security-Cloud-Scan in diesem Paket.

Maßgeblich bleiben [Wettbewerbsvergleich und Prioritäten](2026-10-15-organische-suchergebnisse-und-prioritaeten.md), [Seitenrollenprüfung](2026-10-15-mobile-und-seitenrollen.md) und die [bereits erledigten Linkkorrekturen](2026-10-15-yootheme-linkkorrekturen.md). Mobile Ladeursachen, Autoload-Prüfung auf Staging, Dokument-/Terminweg und Indexierung sind weiter offen. Mailrelay, E-Mail-Versand, private Daten und die fremde geänderte Analyse wurden nicht berührt.
