# Mobile Rankings und Seitenzuordnung nach der Wiederaufnahme

Stand 15.10.2026. Der Betreiber hat die Arbeit nach dem Sicherungspunkt wieder freigegeben. Die abgeschlossenen Mailrelay-, Sitemap- und Öffnungszeiten-Schritte bleiben erhalten.

## Ergebnis und nächste Priorität

Der mobile Sichtbarkeitsrückgang der Startseite lässt sich jetzt innerhalb der verfügbaren GSC-Historie zeitlich enger eingrenzen. Vollständige Wochen zeigen einen Übergang im September und danach anhaltend geringere Impressionen bei schlechterer Durchschnittsposition. Ein einzelner Auslösertag oder eine technische Hauptursache ist damit nicht belegt.

Parallel besteht ein konkreter Ansatz für eine Performanceprüfung: Der öffentliche mobile PageSpeed-Labortest misst LCP 5,0 Sekunden und nennt eine Hintergrundgrafik im LCP-Anfrageaudit. Die reale Nutzerperformance bleibt wegen fehlender Felddaten unbekannt. Inhaltlich sind zuerst die Diagnostikrollen und widersprüchlichen Leistungsbeschreibungen zu klären; ein pauschales Umhängen aller Links auf den bisherigen allgemeinen Hub wäre verfrüht.

## Mobile Tagesreihe und vollständige Wochen

GSC: Web, exakte Anfrage **heilpraktiker augsburg**, Deutschland, Mobil, **20.08.–12.10.2026**. Die Seitentabelle enthält ausschließlich die Startseite mit 8 Klicks, 499 Impressionen und Position 3,3. Es wurde kein zusätzlicher Seitenfilter gesetzt. Die 54 Tageszeilen ergeben wieder die vorherigen Teilmengen 356 und 143 Impressionen sowie insgesamt 8 Klicks. Keine anderen Suchanfragen wurden exportiert.

| Vollständige Woche Sonntag bis Samstag | Impressionen | Klicks | Position näherungsweise |
|---|---:|---:|---:|
| 23.–29.08. | 98 | 2 | 2,67 |
| 30.08.–05.09. | 94 | 2 | 2,86 |
| 06.–12.09. | 101 | 1 | 2,50 |
| 13.–19.09. | 71 | 0 | 2,84 |
| 20.–26.09. | 40 | 0 | 4,34 |
| 27.09.–03.10. | 28 | 1 | 5,74 |
| 04.–10.10. | 31 | 2 | 7,36 |

Die Wochenposition ist mit Impressionen aus den bereits gerundeten Tagespositionen gewichtet und daher eine Näherung, kein direkt abgelesener exakter GSC-Wochenwert. Tage ohne Impressionen haben keine Position. Anfang und Ende außerhalb vollständiger Wochen werden nicht als Wochen verglichen. GSC-Tage folgen der Zeitzone Pacific Time.

Die Entwicklung begründet eine Untersuchung des Übergangs im September. Der 16. September ist kein nachgewiesener Bruchtag: Einzelwerte schwanken, etwa 19 Impressionen am 15.09., 5 am 16.09., 11 am 17.09., 2 am 18.09. und 14 am 19.09. Das geringe Klickvolumen trägt keine belastbare Conversiondiagnose. Suchstandorte, Nachfrage und Ergebnisdarstellung können sich ändern; Deutschland ist keine auf Augsburg eingegrenzte Messung.

Der länger bestehende, vom Betreiber beobachtete Verlust vor dem verfügbaren Augustbeginn bleibt offen. Auch diese Tagesreihe widerlegt keine heutige lokale Beobachtung auf Seite 3 und gilt nicht für die andere Wortfolge augsburg heilpraktiker.

Nachweis: [Tagesreihe mit Wochenaggregation](../../archive/2026-10-15/resume-review/gsc-mobile-daily.json).

## Öffentlicher mobiler Leistungstest

[PageSpeed-Bericht](https://pagespeed.web.dev/analysis/https-rauch-heilpraktiker-de/2vkrb00f9p?utm_source=search_console&form_factor=mobile&hl=de), 15.10.2026 um 08:09 MESZ, Startseite ohne WordPress-Anmeldung im Google-Testsystem. Emuliertes Moto G Power, Lighthouse 13.5.0, langsame 4G-Drosselung, erster Seitenaufbau.

| Laborwert | Ergebnis |
|---|---:|
| Leistung | 79 |
| Barrierefreiheit | 95 |
| Best Practices | 100 |
| Grundlegende SEO-Prüfungen | 100 |
| FCP | 2,1 Sekunden |
| LCP | 5,0 Sekunden |
| TBT | 0 Millisekunden |
| CLS | 0,03 |
| Speed Index | 2,1 Sekunden |

Der LCP-Anfrageaudit zeigt ein Hintergrundelement mit data-src **/wp-content/uploads/Naturheilpraxis-Augsburg-Therapieverfahren.svg**, uk-img und viewportabhängiger Höhe. Der Bericht empfiehlt, das LCP-Bild früh erkennbar anzufordern, Lazy Loading zu vermeiden und die Priorität zu prüfen. Er nennt außerdem renderblockierende Anfragen mit geschätztem Einsparpotenzial von 1.800 Millisekunden. Diese Schätzungen sind nicht einfach addierbar und keine gemessene Verbesserung.

Das vorhandene Snippet [speed-slider-mobile.css](../../snippets/speed-slider-mobile.css) priorisiert bereits ein erstes Slider-JPEG. Ein zusätzlicher öffentlicher Abruf mit mobilem User-Agent bestätigt dieses JPEG-Preload sowie drei media-abhängige, mit data-od-added-tag markierte Preloads für Logo bzw. Theme-Hintergrund. Das bestehende Skript entfernt solche markierten Preloads zur Laufzeit. Die im LCP-Audit genannte Grafik steht im gelieferten HTML als data-src/uk-img-Hintergrund, ohne eigenes Bild-Preload. [Quellnachweis](../../archive/2026-10-15/resume-review/mobile-image-source.json). Dieser Abruf zeigt die HTML-Konfiguration, keinen Netzwerk-Wasserfall. Deshalb vor einer Änderung das tatsächlich maßgebliche Element und die Ressourcenabfolge prüfen: kein zweites pauschales Preload, keine globale Lazy-Loading-Abschaltung und kein zusätzliches Optimierungsplugin auf Verdacht. Ein einzelner synthetischer Lauf vom Oktober erklärt den historischen Septemberrückgang nicht. Der SEO-Score 100 prüft Grundlagen und ist keine Bewertung der inhaltlichen Qualität oder des Rankings.

PageSpeed zeigt keine CrUX-Felddaten. Der GSC-CWV-Bericht, zuletzt aktualisiert 13.10.2026, meldet für Mobil und Computer nicht genügend Nutzungsdaten der letzten 90 Tage; beide Detailberichte sind deaktiviert. Somit gibt es kein reales CWV-Gut-/Schlechturteil. [Messnachweis](../../archive/2026-10-15/resume-review/psi-mobile.json), [GSC-CWV](../../archive/2026-10-15/resume-review/gsc-cwv.txt).

## Seitenrollen und Voraussetzungen für Linkkorrekturen

Neun öffentliche URLs wurden frisch ohne Anmeldung abgerufen. Jede liefert 200, genau eine H1, eine passende selbstreferenzielle Canonical sowie index/follow; kein X-Robots-Tag wurde geliefert. Das belegt weder tatsächliche Indexierung noch gerenderte mobile Nutzbarkeit. Die HTML-Auszüge enthalten Navigation und Footer, weil kein main-Element gefunden wurde. Die frühere GSC-Nichtindexierung des allgemeinen Diagnostikhubs wird dadurch nicht aufgehoben.

| Seite | Zielrolle | Vor der stärkeren Verlinkung klären |
|---|---|---|
| /naturheilkundliche-gesundheitsdiagnostik/ | Allgemeiner Einstieg in Ablauf und angebotene Untersuchungen | Laboruntersuchungen und ergänzende Hinweisverfahren verständlich trennen. Der kurze vorhandene Text ordnet beide zusammen und anschließend Diagnostik unter BIT ein. |
| /nls-diagnostik/ | Ein konkretes Verfahren | NLS als Einzelleistung benennen; Aussagen zu Organen, Erregern und Belastungen fachlich prüfen. |
| /diagnostik-informationstherapie/ | Begriffliche Einordnung von Informationstherapie | Eigene Aufgabe gegenüber BIT erklären; die aktuelle Überordnung und der anschließende Einstieg über NLS widersprechen einer eindeutigen Navigation. |
| /biophysikalische-informationstherapie-bit/ | Tatsächliches Praxisangebot unter BIT | Betreiberbestätigung 15.10.: BIT ist ein Oberbegriff für mehrere Verfahren. Die Seite soll dieses Angebot ordnen und die einzelnen Leistungen direkt erschließen; keine separate BIT-Anwendung erfinden. |
| /bioresonanz-therapie/ | Konkrete Leistung mit Ablauf und Terminweg | Veraltetes Seit-kurzem-Wording und weitgehende Gerätebeschreibungen sachlich prüfen. |
| /bioresonanz-und-elektroakupunktur/ | Sachlicher Methodenvergleich | Unterschiede konkret erklären und die beiden Leistungsseiten direkt verknüpfen. |
| /vieva-pro-herzratenvariabilitaet/ und /vital-und-naehrstoffanalyse/ | Tatsächlich angebotene Messung und deren Grenzen | Betreiberbestätigung 15.10.: Es gibt nur Vieva Pro; Vieva Plus ist ein Schreibfehler. Angeboten werden damit HRV und Vital-/Nährstoffanalyse. Diese Angebotsbestätigung ist kein Wirksamkeits- oder Validitätsnachweis der medizinischen Aussagen. HRV-Einleitung und ältere Organ-/Nährstofflisten fachlich aufeinander abstimmen. |

Geeignete kleine Umsetzungspakete nach dieser Inhaltsklärung:

1. Hauptmenü und allgemeinen Startseitenlink Diagnostik auf denselben geeigneten allgemeinen Einstieg führen. Namentliche NLS-Zugänge behalten ihr spezifisches Ziel.
2. HFCM #13 gezielt anpassen. Der aktuelle Cluster ordnet 13 Einträge einschließlich BIT, Informationstherapie und allgemeinem Hub unter NLS ein. NLS fehlt selbst als MAP-Eintrag und DIAG-Item. Ein globaler URL-Tausch würde außerdem einen Übersichts-Selbstlink auf dem neuen Hub erzeugen, weil der Renderer nur items-Selbstlinks überspringt, nicht hub-Selbstlinks.
3. Bioresonanz-Leistungskachel direkt auf /bioresonanz-therapie/ und Vergleichskachel direkt auf /bioresonanz-und-elektroakupunktur/ führen; Labels und Wirkungsaussagen müssen zur tatsächlichen Aussage der Zielseite passen.
4. Die Gerätezuordnung ist nun bestätigt: Footerlabel Vieva Plus Diagnostik zu Vieva Pro Diagnostik korrigieren und direkt auf /vieva-pro-herzratenvariabilitaet/ führen. Der jetzige EAV-Link ist falsch zugeordnet. Auf der Pro-Seite die bestätigten Angebotsbereiche HRV und Vital-/Nährstoffanalyse verständlich verknüpfen und Aussagen getrennt fachlich prüfen; keine ungeprüfte Gleichsetzung der Methoden mit einem Labor.

Abnahme je Paket: archivierter Vorherstand, eine logische Änderung, direktes Ziel 200, passende Canonical, korrekte Labels in Desktop- und Mobilnavigation, keine Übersichts-Selbstlinks und öffentlich geprüftes JavaScript-Cluster. Keine neuen URLs, Weiterleitungen oder Zusammenlegungen aus diesem Befund ableiten.

## Bestätigte Begriffe und offene Footerzuordnung

Der Betreiber hat im laufenden Schritt bestätigt: BIT ist der Oberbegriff für mehrere Verfahren. Es gibt nur Vieva Pro; Plus ist ein Schreibfehler. Vieva Pro wird in der Praxis für HRV und Vital-/Nährstoffanalyse angeboten. Damit ist die Benennung geklärt; die wissenschaftliche Aussagekraft der genannten Auswertungen ist gesondert anhand geeigneter Quellen zu prüfen.

Die öffentliche Footer-Verknüpfung wurde im Browser erneut als Vieva Plus Diagnostik mit dem falschen EAV-Ziel festgestellt. In WordPress wurden Widgets und anschließend YOOtheme Layout/Fußzeile nur lesend geöffnet. Der Fußzeilenbereich bot Neues Layout statt eines bestehenden Layouts an; die Vorschau war noch leer. Der vorhandene öffentliche Footer konnte dadurch keiner eindeutig bearbeitbaren aktuellen Vorlage zugeordnet werden. Kein neues Layout anlegen und kein inaktives Footer-Widget auf Verdacht verändern. Die Oberfläche blieb auf Veröffentlicht mit deaktivierter Schaltfläche; kein Speichern oder Veröffentlichen ausgelöst. Die Korrektur bleibt bis zur eindeutigen Vorlagenzuordnung offen.

## Fortsetzung und Schutz des Bestands

Die technische Diagnose und die inhaltliche Rollenklärung können parallel fortgesetzt werden. Als nächster technischer Schritt sind reproduzierbare mobile LCP-Messungen und der konkrete Ladeablauf zu prüfen; als nächster redaktioneller Schritt die allgemeine Diagnostik samt Abgrenzung von NLS, Informationstherapie und BIT. Danach folgen die kleinen verifizierbaren Linkkorrekturen. Vergleichbare Augsburger Mobil-SERPs und der Abgleich des Septemberverlaufs mit dokumentierten Änderungen bleiben offen.

In dieser Wiederaufnahme wurden keine produktiven Inhalte, Plugins, Relaydateien, Profilangaben oder Weiterleitungen verändert und keine E-Mails versandt. Der Nutzer öffnete Chrome neu; danach waren GSC und WordPress wieder erreichbar. Der UpdraftPlus-Tab wurde nicht bedient. Der alte Sicherungspunkt und die verschlüsselte Mailrelay-Sicherung bleiben erhalten; die fremde lokale Änderung an docs/LIVE-ANALYSE-2026-08-28.md bleibt unverändert und wird nicht eingecheckt.

Sol high prüfte Seitenrollen und Clusterlogik, Luna max die Messmethodik und Google-Primärquellen, Astra medium die Schlussfolgerungen unabhängig. Die neue Live-GSC-/PSI-Erfassung führte der Hauptagent aus; die Unteragenten haben diese nicht unabhängig reproduziert.

## Methodische Quellen

[Google PageSpeed Insights](https://developers.google.com/speed/docs/insights/v5/about), [Google zu Page Experience](https://developers.google.com/search/docs/appearance/page-experience), [GSC-Datenhinweise](https://support.google.com/webmasters/answer/96568?hl=en), [GSC-Vergleiche](https://support.google.com/webmasters/answer/17011165?hl=en), [Google zu hilfreichen verlässlichen Inhalten](https://developers.google.com/search/docs/fundamentals/creating-helpful-content).