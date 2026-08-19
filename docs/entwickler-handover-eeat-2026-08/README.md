# Entwickler-Übergabe – E-E-A-T-Optimierung rauch-heilpraktiker.de

**Stand der Dokumentation:** 2026-08-19  
**Live-Zeitraum der Arbeiten:** 2026-08-14 bis 2026-08-19 (On-page bis 17.08., GBP 19.08.)  
**Live-Domain:** https://rauch-heilpraktiker.de  
**Repo (Single Source of Truth):** https://github.com/redshift-three67/naturheilpraxis-eeat  
**Knowledge-Basis (mehrere Projekte):** https://github.com/redshift-three67/eeat-optimierung

Dieser Ordner ist die **gesonderte, lesbare Gesamtdarstellung** aller erfolgreich durchgeführten Optimierungsschritte. Er ersetzt die Tagesarchive nicht – er verweist darauf.

## Dateien in diesem Ordner

| Datei | Inhalt |
|-------|--------|
| [00-leitbild-und-rahmen.md](00-leitbild-und-rahmen.md) | Auftrag, YMYL/HWG, Arbeitsmodus, Verbote |
| [01-phasenuebersicht.md](01-phasenuebersicht.md) | Phasen 0–13 als Übersichtstabelle |
| [02-schritte-detailliert.md](02-schritte-detailliert.md) | Jeder erfolgreiche Schritt mit Ort, Artefakt, Archiv |
| [03-hfcm-und-snippets.md](03-hfcm-und-snippets.md) | Live-HFCM-IDs, kanonische Snippets, Änderungsregeln |
| [04-urls-und-cluster.md](04-urls-und-cluster.md) | Start, Hubs, Kindseiten, Anamnese-App, Menüs |
| [05-technik-workflow.md](05-technik-workflow.md) | CDP, Cache, Rank Math, YOO, Rollback |
| [06-offen-und-nicht-tun.md](06-offen-und-nicht-tun.md) | Rest offen, Wiedervorlage, explizit nicht tun |
| [07-google-business.md](07-google-business.md) | GBP 19.08.: Pin, Zeiten, PLZ, Kategorien, Attribute |
| [08-uebertragbare-erkenntnisse.md](08-uebertragbare-erkenntnisse.md) | Prinzipien für sunclinic.ch (kein Inhaltsklon) |
| [schritte.csv](schritte.csv) | Maschinenlesbare Schrittliste |

## Schnellstart für einen nachfolgenden Entwickler

1. Dieses README + `00-leitbild-und-rahmen.md` lesen.  
2. `docs/session/CURRENT.md` und `docs/PLAN.md` im Repo-Root gegen den Live-Stand prüfen.  
3. HFCM #6–#17 nur über die Dateien in `snippets/` ändern (siehe `03-hfcm-und-snippets.md`).  
4. Ablauf immer: Prewrite → ein Live-Schritt → Frontend-Verify → Archiv.  
5. CDP-Port **9224** exklusiv für diese Domain. Nicht 9223 (Lovable) oder 9225 (Sunclinic).  
6. Nächstes Projekt sunclinic.ch: zuerst `08-uebertragbare-erkenntnisse.md`, dann das **Sunclinic-Repo**. Rauch-Snippets nicht kopieren.

## Kurzfazit (August 2026)

On-page E-E-A-T und das Google-Unternehmensprofil sind für diese Phase **abgeschlossen**. Beobachtung 1–2 Wochen (Pack „Geöffnet“), danach optional Such-Ads. Rest: Reviews, Apple/Bing, Downloads, Corona-Menü, Fortbildungen – kein Blocker. Neue Schrift ist **kein** E-E-A-T-Rest.
