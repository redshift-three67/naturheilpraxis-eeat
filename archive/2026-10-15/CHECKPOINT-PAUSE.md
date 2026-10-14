# Sicherungspunkt – Pause am 15.10.2026

## Arbeitsstatus

**PAUSE auf ausdrücklichen Wunsch des Betreibers.** Keine weitere Analyse, Live-Änderung oder Hintergrundüberwachung beginnen, bis der Betreiber die Fortsetzung anweist. Es wurde keine Automation für die Pause eingerichtet. Die beteiligten Unteragenten sind fertig.

Git-Stand der abgeschlossenen Erstauswertung vor dieser Sicherung: **2422990522b521ca936eccb2b70d21baf17061a0**, Branch main; mit origin/main synchronisiert. Die Dokumentation dieses Sicherungspunkts erhält einen eigenen Commit und die Markierung **checkpoint-2026-10-15-pause**.

## Verifizierter Stand der Website und Konten

- Zentrale Mailrelay-Dateiprotokollierung deaktiviert; fünf rohe SMTP-Fehlerwerte in HTTP-JSON-Antworten durch festen Text ersetzt. Transportvertrag im Übrigen erhalten. Letzter Live-Abgleich und Tests sind in den beiden Mailrelay-Berichten dokumentiert; kein produktiver Zustelltest und keine Testmail versandt.
- Originalquelle und ursprüngliches Mailrelay-Log liegen unverändert verschlüsselt außerhalb Git; zusätzlicher Zwischenstand vor dem HTTP-Antwortfix vorhanden. Keine Löschung des historischen Serverlogs und keine Zugangsdatenrotation durchgeführt.
- Aktuelle Sitemap in GSC erfolgreich verarbeitet, **64 erkannte Seiten**. Das bedeutet nicht, dass alle 64 indexiert sind. Alte statische Sitemap bleibt vorerst bestehen.
- Praxiszeiten im Unternehmensprofil nach erneutem Laden als aktueller Stand ohne Ausstehendhinweis: Mo–Fr 10:00–12:30 und 13:00–19:00, Sa/So geschlossen. Die vollständige öffentliche Ausspielung aller Tage wurde noch nicht separat geprüft. Termin erforderlich bleibt erhalten.
- GSC: keine manuellen Maßnahmen und keine erkannten Sicherheitsprobleme. Kein Ersatz für einen vollständigen Security-Review.
- Allgemeiner Diagnostik-Hub im zuletzt gespeicherten Google-Bericht nicht indexiert, Live-Test technisch positiv. Ein Indexierungsantrag scheiterte an der Verbindung zum reCAPTCHA-Dienst; keine erfolgreiche Anfrage behaupten.
- Alter Mailrelay-Editor wurde vom Betreiber ohne Speichern geschlossen. Keine offenen ungespeicherten Änderungen aus unserer letzten Diagnosephase bekannt. Vor jeder späteren UI-Aktion Zustand frisch lesen.
- Aktuelle 301 von /bioresonanz-versus-elektroakupunktur/ zur neuen /bioresonanz-und-elektroakupunktur/ funktioniert; keine pauschale Rücknahme der Augustarbeiten.
- Temporäre Browser-Viewportänderung vollständig zurückgesetzt. Keine neuen Pluginupdates, Inhaltsumbauten, URL-Zusammenlegungen oder neuen Weiterleitungen während der Ranking-Erstauswertung.

## Erkenntnisse für die Fortsetzung

GSC-Zeiträume: 20.08.–15.09.2026 gegen 16.09.–12.10.2026, jeweils 27 Tage. Deutschland: Klicks 65→52, Impressionen 2.853→1.940. Exakte Anfrage heilpraktiker augsburg: nur die Startseite als Zielseite; Mobilimpressionen 356→143, Durchschnittsposition 2,7→5,0.

Die andere Wortfolge augsburg heilpraktiker hat andere Werte und passt eher zur Betreiberbeobachtung Seite 3. GSC-Durchschnittspositionen sind keine heutigen lokalen organischen Rangplätze. Der länger bestehende Verlust vor dem 20. August ist nicht durch eine historische Zeitreihe belegt.

Bioresonanz- und Naturheilkunde-Leistungsseiten sind für die geprüften lokalen Anfragen gegenüber der Startseite schwach sichtbar. Uneinheitliche Diagnostik-Linkziele sind frisch belegt: Menü → Informationstherapie, Inhaltslink → NLS, zusätzlicher allgemeiner Diagnostik-Hub. Das ist noch kein Beweis schädlicher Kannibalisierung.

### Reihenfolge beim ausdrücklich beauftragten Neustart

1. [STATUS](../../docs/STATUS.md), diesen Sicherungspunkt und die [Ranking-Erstauswertung](../../docs/reviews/2026-10-14-ranking-erstauswertung.md) lesen. Abgeschlossene Bestandsprüfungen nicht pauschal wiederholen.
2. Mobile Hauptquery auf Tages-/Wochenebene sowie öffentliche mobile Darstellung/CWV und vergleichbare Augsburger SERPs prüfen. Die bisherige Viewportprüfung erfolgte angemeldet, ohne Smartphone-User-Agent-Emulation.
3. Seitenrollen für allgemeine Diagnostik, NLS, BIT/Informationstherapie und Bioresonanz klären; danach kleine gesicherte Linkkorrekturen und gezielte Leistungsseitenverbesserungen.
4. Gültige Download-Dokumente vor Neuverlinkung eindeutig zuordnen. Keine älteren Preis-/Datenschutz-/Corona-PDFs allein nach Dateiname veröffentlichen.
5. Tatsächlichen Anamnese-App-/Mailrelay-Aufrufer und Umgang mit Erfolg ohne vorgesehenen PDF-Anhang prüfen; produktiven Versand nur innerhalb eines dafür konkret freigegebenen Tests.
6. Größere Updates, Strukturumbauten und spätere EEAT-Weiterentwicklung erst auf gesicherter Grundlage. Keine Krankheitsseiten-Welle, erfundenen Nachweise oder Heilversprechen.

## Sicherungen und Wiederaufnahme

Privater lokaler Ordner außerhalb der Git-Projekte:
E:/Codex-Private-Backups/rauch-heilpraktiker.de/2026-10-15_pause-2422990

- Die bestehende fremde Änderung an docs/LIVE-ANALYSE-2026-08-28.md bleibt im Arbeitsbaum unverändert und wird nicht eingecheckt. Ihre aktuelle vollständige Datei ist zusätzlich per Windows DPAPI CurrentUser gesichert; SHA-256: 78b88e0999ae287c180513c613abe3e02c5bc87b0f3c34c85ce249db25993de4.
- Ein verschlüsseltes Git-Bundle nach diesem Checkpoint-Commit sowie ausgewählte Nachweisbilder werden im privaten Sicherungsordner ergänzt und durch das dortige manifest.json verifiziert. Das Manifest benennt den tatsächlich gesicherten Commit.
- Zugriff nur aktueller Windows-Benutzer und SYSTEM. DPAPI-Wiederherstellung benötigt dasselbe Benutzerprofil und dessen DPAPI-Schlüssel; eine reine Kopie auf einen anderen Rechner reicht nicht.
- Frühere sensitive Sicherung bleibt separat erhalten: E:/Codex-Private-Backups/rauch-heilpraktiker.de/2026-10-14_215757. Ihre Wiederherstellungsskripte betreffen die dort dokumentierten ursprünglichen Dateien, nicht automatisch die neue Pausensicherung.
- Dies ist ein Sicherungspunkt des Arbeits-/Dokumentationsstands und der vorhandenen lokalen Änderung. Kein neuer vollständiger WordPress-Datei-/Datenbankdump oder Provider-Snapshot wurde angelegt. Tägliche Provider-Backups und ein erfolgreicher früherer Komplett-Restore sind vom Betreiber bestätigt.
- Beim Wiederaufnehmen zuerst Branch/Tag, Arbeitsbaum und private Manifest-Prüfsummen lesen. Keine bestehenden lokalen Änderungen durch Reset, Checkout oder Stash-Pop überschreiben.

Die maßgeblichen Berichte und begrenzten GSC-Nachweise sind im kanonischen Repo naturheilpraxis-eeat versioniert. Der alte Vollbestand naturheilpraxisrauch wurde in dieser Sitzung nicht bearbeitet.
