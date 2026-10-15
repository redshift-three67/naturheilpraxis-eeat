# YOOtheme: zwei Linkkorrekturen live – 15.10.2026

Die beiden vorbereiteten Linkfehler sind behoben und im öffentlichen Frontend verifiziert. Der vom Betreiber geöffnete YOOtheme-Customizer funktioniert. Die vorher beobachtete leere Vorschau ist damit keine allgemeine Bearbeitungssperre mehr; ihre genaue Ursache ist nicht ermittelt. Keine Theme-, Plugin- oder Serverkonfiguration zur Umgehung geändert.

## Geänderte Stellen

| Stelle | Vorher | Jetzt | Aktive Quelle / Speichern |
|---|---|---|---|
| Startseite: Karte „Bioresonanztherapie nach Baklayan“ | `bioresonanz-versus-elektroakupunktur/` | `bioresonanz-therapie/` | Home, Post 17; BIT-/Baklayan-Grid, nur Linkfeld; „Layout speichern“ |
| Gemeinsamer Footer: Vieva-Link | „Vieva Plus Diagnostik“ → EAV-Seite `/elektroakupunktur-nach-dr-voll-3/` | „Vieva Pro (HRV)“ → `/vieva-pro-herzratenvariabilitaet/` | Customizer → Widgets → Bottom → Builder: Peter Footer 2 → erstes Text-Element, Widget `builderwidget-6`; „Veröffentlichen“ |

Der Footer stammt aus dem aktiven Bottom-Widget, nicht aus einem neu anzulegenden YOOtheme-Footerlayout. Sieben Leistungslinks sind erhalten. Der separate Link zur Vitalfeld-/Nährstoffseite und die eigene Bioresonanz/EAV-Vergleichskarte bleiben erhalten. „HRV“ grenzt das Vieva-Linkziel von der separaten Vital-/Nährstoffseite ab; daraus folgt keine Bestätigung diagnostischer oder therapeutischer Wirksamkeit.

## Sicherung und Kontrolle

- [Baklayan-Kartenstand vor Änderung](../../archive/2026-10-15/prewrite/yootheme-linkkorrekturen/home-baklayan-link.json): Titel, Text, Bildangaben und altes/neues Linkziel. Kein vollständiger Datenbankexport.
- [Unverändertes Footer-HTML vor Änderung](../../archive/2026-10-15/prewrite/yootheme-linkkorrekturen/footer-leistungslinks-before.html) und [Quellen-/Rollbackangaben](../../archive/2026-10-15/prewrite/yootheme-linkkorrekturen/footer-source.md).
- Öffentliche Startseite vor und nach Speicherung frisch aufgerufen: im Vergleich aller Linktexte und Ziele genau zwei geänderte Links. Titel, H1, Canonical, Robots sowie die Anzahl der JSON-LD-Blöcke (3) unverändert. Das ist kein vollständiger Vergleich sämtlicher Schema-Inhalte oder des gesamten HTML.
- Baklayan-Karte tatsächlich angeklickt: öffentliche Zielseite `/bioresonanz-therapie/` geladen. Korrigierter Vieva-Footerlink auch dort vorhanden. Vieva-Zielseite zuvor direkt gelesen: Vieva Pro und HRV/Biofeedback sind erkennbar beschrieben.
- Customizer abschließend „Veröffentlicht“, Schaltfläche deaktiviert. Keine offenen Änderungen dieses Arbeitspakets. Kein Cacheleeren erforderlich; frische öffentliche Aufrufe zeigten den neuen Stand.
- [Maschinenlesbarer Nachweis](../../archive/2026-10-15/yootheme-linkkorrekturen/verification.json), [öffentlicher Footer-Screenshot](../../archive/2026-10-15/yootheme-linkkorrekturen/footer-live.jpg).

Rückweg: am aktiven Home-Grid nur den alten relativen Link wieder einsetzen und Layout speichern; beim aktiven Footer-Text gesichertes HTML wieder einsetzen und veröffentlichen. Anschließend öffentlich prüfen. Die täglichen Provider-Backups mit vom Betreiber bestätigter erfolgreicher Komplettwiederherstellung bleiben die zusätzliche Wiederherstellungsebene.

Die bestehende Warnung vor einem Home-Duplikat bleibt offen. Dieses Duplikat weder veröffentlicht noch gelöscht; vor einer späteren Veröffentlichung zwingend gegen den aktuellen Home-Stand abgleichen, damit die heutigen Änderungen nicht überschrieben werden. Mailrelay, Logs, Zugangsdaten, Formulare und E-Mail-Versand wurden in diesem Paket nicht bearbeitet.

## Nächste Prioritäten nach dem Wettbewerbsvergleich

| Priorität | Konkreter nächster Schritt | Grenze / Abnahme |
|---|---|---|
| 1 | Patientenwege und Seitenrollen als konkrete kleine Änderungspakete vorbereiten: Home für „Heilpraktiker Augsburg“, Diagnostik als Übersicht, BIT als Oberbegriff mehrerer Verfahren, Naturheilkunde als dritter Schwerpunkt; NLS und Vieva als einzelne Angebote verständlich einordnen | Bestehende URLs erhalten. Aktuelle Navigation und vorhandene Inhalte zuerst abgleichen; keine künstlichen Keywordseiten oder Massenänderungen. Neue medizinische Aussagen vor Veröffentlichung belegen/einordnen. |
| 2 | Bestehende Angaben zu Person, Qualifikation, Ersttermin/Ablauf und Kosten auffindbarer und konkreter machen | Bereits vorhandene Informationen ergänzen statt duplizieren. Kostenpraxis nicht erfinden; bestehender Hinweis auf individuelle Besprechung bleibt bis zu einer bestätigten Änderung erhalten. Betreiber-/Impressumsangaben nachrangig, erforderliche Angaben erhalten. |
| 3 | Medizinische Formulierungen und Überschriften auf den wichtigsten Leistungsseiten gemeinsam prüfen | Auf der aufgerufenen Bioresonanz-Seite acht H1-Knoten einschließlich langer Aussage und FAQ erkannt. Semantische Hierarchie mit Textprüfung verbinden; Mehrfach-H1 allein ist keine bewiesene Ursache von Platz 32. Der bestehende Baklayan-Kartentext wurde heute nicht inhaltlich verändert oder fachlich bestätigt. |
| Parallel | Mobilen LCP-Ladeablauf und Autoload-/Cachehinweise zunächst lesend bzw. auf Staging eingrenzen | Frühere Laborwerte von ca. 5 s und 2 MB Autoload sind Hinweise; keine nachgewiesene Hauptursache. Kein Plugin-/Datenbankeingriff auf Verdacht. |
| Anschließend | Termin-/Dokumentweg, Diagnose-Hub-Indexierung, lokale Profile/Reputation und Wirkung pro Änderungspaket weiter prüfen | Kein nicht abgestimmter Versandtest. GSC und normale organische Weblinks getrennt interpretieren; vergleichbare volle Wochen und 28-Tage-Fenster nutzen. Größere EEAT-Umstellung anschließend. |

Der [organische Wettbewerbsvergleich](2026-10-15-organische-suchergebnisse-und-prioritaeten.md) bleibt die Ursachen- und Priorisierungsbasis. Dessen damaliger Bearbeitungsblocker und der Status „Linkfixes noch nicht live“ sind durch diesen Bericht überholt. Die beobachtete Position 32 ist kein in dieser Sitzung reproduzierter exakter Rang; keine einzelne Hauptursache oder Rankingverbesserung durch diese Korrekturen behaupten.

Ausführung über die bestehende autorisierte Chrome-Sitzung mittels Computer-Use. Keine Cloud-VM, kein Security-Cloud-Scan und kein zusätzlicher Modellreview in diesem engen Korrekturpaket ausgeführt. Öffentliche Belege und Dokumentation liegen im kanonischen EEAT-Repository; der alte WordPress-Quellordner und die fremde geänderte Analyse bleiben unverändert.
