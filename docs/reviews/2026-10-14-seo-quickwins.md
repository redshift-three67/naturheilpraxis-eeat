# SEO-Quickwins – 14.10.2026

## Ergebnis und Abgrenzung

Vom Betreiber freigegebener nächster Schritt nach den Mailrelay-Sicherheitskorrekturen: aktuelle Sitemap in GSC einreichen, bestätigte Praxiszeiten im Google-Unternehmensprofil ergänzen und den Diagnostik-Hub mit Googles Live-Test prüfen. Die vorhandene WordPress-Instanz bleibt die operative Grundlage; keine Migration, Pluginupdates oder medizinischen Inhaltsänderungen in diesem Batch.

Die frühere Lesebeschränkung und historische Pause sind für diese ausdrücklich beauftragten Quickwins aufgehoben. Tägliche Provider-Backups und eine erfolgreiche Komplettwiederherstellung sind vom Betreiber bestätigt. Die sensible Mailrelay-Sicherung bleibt verschlüsselt außerhalb Git.

## 1. Sitemap

Vorher war nur https://rauch-heilpraktiker.de/sitemap.xml in GSC eingereicht: 53 erkannte Seiten, Einreichung 11.05.2023, zuletzt gelesen 03.10.2026.

Die aktuelle robots.txt verweist auf https://rauch-heilpraktiker.de/sitemap_index.xml. Dieser Index enthält page-sitemap.xml mit 64 eindeutigen Seiten-URLs. Bild-loc-Einträge wurden nicht als Seiten gezählt.

Öffentliche Prüfung vor Einreichung:

- Index und untergeordnete Sitemap: HTTP 200, gültiges XML.
- 64 von 64 Seiten: HTTP 200, keine Weiterleitung, genau eine zur geprüften URL passende kanonische URL; kein HTML-Meta-noindex erkannt.
- Alle 64 Seiten-URLs verwenden HTTPS und denselben Host.
- Diese begrenzte Prüfung ersetzt keine vollständige Robots-, Rendering-, Inhalts- oder Indexierungsprüfung. Der HTTP-X-Robots-Tag wurde im ursprünglichen Audit nicht gegen alle Schreibweisen abgesichert.

Der aktuelle Sitemap-Index wurde einmal eingereicht; GSC bestätigte die Einreichung. Der anschließende Detailbericht zeigt: zuletzt gelesen 14.10.26, „Sitemap-Index wurde ohne Fehler verarbeitet“, 0 erkannte Seiten. Bei der späteren Kontrolle zeigt die Übersicht zugleich weiterhin „Unbekannt / Konnte nicht abgerufen werden / 0“. Der Detailbericht bleibt fehlerfrei, zeigt aber noch keine verarbeitete untergeordnete Sitemap.

**Status: eingereicht; widersprüchliche GSC-Anzeigen und Verarbeitung der 64 Seiten noch offen.** Keine weitere Einreichung oder Löschung vorgenommen. Die alte Sitemap und ihr GSC-Eintrag bleiben vorläufig erhalten. Eine neue Sitemap garantiert weder Crawling noch Indexierung.

Differenz der öffentlichen Sitemaps: 13 URLs nur in der aktuellen Sitemap; zwei nur in der alten: /bioresonanz-versus-elektroakupunktur/ und /corona-praxis-offen/. Diese Differenz allein rechtfertigt keine Löschung oder Weiterleitung.

## 2. Praxiszeiten im Google-Unternehmensprofil

Profil Naturheilpraxis Rauch, Friedrich-Deffner-Strasse 19a, 86163 Augsburg. Vorher: „Geöffnet ohne Angabe der Öffnungszeiten“. Betreiberbestätigung im Chat für alle sieben Tage liegt vor.

Gespeichert wurden:

| Tage | Vormittag | Nachmittag |
|---|---|---|
| Montag bis Freitag | 10:00–12:30 | 13:00–19:00 |
| Samstag und Sonntag | geschlossen | geschlossen |

Der offizielle Editor zeigt nach dem Speichern sämtliche fünf Werktage mit beiden Intervallen und beide Wochenendtage geschlossen unter „Ausstehend“. Google meldet „Ihre Änderung wird derzeit überprüft“. Eine öffentliche Veröffentlichung wurde nicht bestätigt. „Termin erforderlich“ bleibt vorhanden; spezielle Öffnungszeiten wurden nicht verändert.

**Status: gespeichert, Google-Prüfung ausstehend.** Ausgangszustand und gespeicherte Wochenübersicht sind archiviert. Bei einer notwendigen Rücknahme wäre der frühere Status „Geöffnet ohne Angabe der Öffnungszeiten“ der dokumentierte Ausgangspunkt; aktuell ist keine Rücknahme veranlasst.

## 3. Diagnostik-Hub

URL: https://rauch-heilpraktiker.de/naturheilkundliche-gesundheitsdiagnostik/

Gespeicherter Google-Indexbericht vor Live-Test:

- „Gecrawlt – zurzeit nicht indexiert“, letzter Crawl 31.08.2026, 18:47:59.
- Googlebot für Smartphones, Abruf erfolgreich, Crawling und Indexierung zulässig.
- Angegebene und von Google ausgewählte kanonische URL stimmen mit der geprüften URL überein.

Googles Live-Test am 14.10.2026, 23:23 bestätigt „URL ist für Google verfügbar“ und „Seite kann indexiert werden“. Das ist eine technische Verfügbarkeitsprüfung, keine Indexierungszusage.

Ein Indexierungsantrag wurde versucht. GSC meldete einen Sendefehler und fehlende Verbindung zum reCAPTCHA-Dienst. Keine erfolgreiche Einreichung bestätigt; kein CAPTCHA gelöst und kein zweiter Antrag versucht. **Status: Live-Test bestanden, Indexierungsantrag technisch fehlgeschlagen.** Später gezielt erneut versuchen, gegebenenfalls mit menschlicher CAPTCHA-Bearbeitung.

## 4. Noch keine blinde Download-Reparatur

Die frühere Prüfung dokumentiert sechs Download-Manager-Links, die auf die Startseite statt zu einem PDF führen. Der Abgleich des Bestands ergab 20 mögliche PDF-Dateien mit mehreren Versionen. Öffentliche HEAD-Antworten: HTTP 200, application/pdf und zur jeweiligen lokalen Datei passende Länge; dies bestätigt weder den Inhalt noch die Aktualität.

Dateinamen wie „aktuell“ oder ein erreichbarer PDF-Pfad reichen nicht für eine Auswahl. Insbesondere Preisgestaltung, Datenschutz und Corona-Unterlagen müssen vor Neuverlinkung auf Gültigkeit geprüft werden. Noch keine Links ersetzt, keine alten Dokumente erneut veröffentlicht. Nächster Schritt: aktuelle Live-Downloadseite lesen, leere Formularvorlagen lokal prüfen und die gültigen Fassungen eindeutig zuordnen.

## Nächste Arbeitspakete in Reihenfolge

Ergänzung auf Betreiberwunsch: Vor größeren SEO-Änderungen gilt der [Plan zur Ranking-Ursachenanalyse und zum Top-Ten-Vergleich](2026-10-14-rankingverlust-plan.md). Er konkretisiert und priorisiert Punkt 2.

1. Beim nächsten gezielten Kontrollschritt Google-Freigabe der Zeiten und konsistenten Sitemapstatus einschließlich page-sitemap.xml prüfen. Kein automatisches Monitoring eingerichtet.
2. GSC-Leistungsdaten nach Suchanfrage, Seite, Gerät und Zeitraum auswerten; Markenanfragen getrennt betrachten. Mit Indexierungsdaten die drei Leistungscluster priorisieren: biophysikalische Informationstherapien, Naturheilverfahren, Diagnostik im Augsburger Raum.
3. Downloadwege und Kontakt-/Terminführung konkret reparieren, sobald aktuelle Dokumente zugeordnet sind. Tatsächlichen Anamnese-App-/Mailrelay-Aufrufer identifizieren; Erfolg ohne vorgesehenen PDF-Anhang vor Änderung des Antwortvertrags beim echten Client prüfen.
4. Für bestehende priorisierte Seiten konkrete Änderungen an Titel, Beschreibung, internen Links, Orientierung, Ablauf und belegbaren Fachinformationen vorbereiten; medizinische Aussagekraft und Grenzen korrekt darstellen. Keine Rankinggarantien und keine schematisch erzeugten Orts-/Krankheitsseiten.
5. Technik- und Sicherheitsarbeit getrennt auf einer isolierten, bereinigten Kopie testen: Updateabhängigkeiten, Cacheausschlüsse, Autoload-Ursachen, Redirectzuständigkeit und weitere Mailrelay-Ausgabepfade. Erst danach gezielte Produktionsänderungen. Cloud/VM/Security wurden für diesen Quickwin-Batch nicht mit Patientendaten oder vollständigem Produktionsdump befüllt.

## Nachweise und Quellen

Öffentliche Vorherdaten, 64-Zeilen-Audit, technische Ergebnisse und auf die eigene Praxis begrenzte GSC-/Profilbeobachtungen: archive/2026-10-14/prewrite/seo-quickwins/.

Screenshots lokal außerhalb Git im Visualisierungsordner dieser Sitzung:
quickwins-sitemap-verarbeitet.png, quickwins-gbp-zeiten-gespeichert.png und quickwins-indexantrag-fehler.png. Der ursprüngliche Screenshot des Live-Test-Ergebnisses kann den noch schließenden Fehlerdialog enthalten; maßgeblich sind die dokumentierten DOM-Texte.

- Google: https://developers.google.com/search/docs/crawling-indexing/sitemaps/build-sitemap
- Google: https://support.google.com/webmasters/answer/7451001?hl=de

Die unveränderte fremde Bearbeitung von docs/LIVE-ANALYSE-2026-08-28.md gehört nicht zu diesem Batch.
