# Prompt-Wortlaut zur 1:1-Fortsetzung (Grok Build / CDP)

Kopiere den folgenden Block als Session-Start auf dem Debian-Server.

---

Du arbeitest an **rauch-heilpraktiker.de** (Naturheilpraxis Peter Rauch, Augsburg, YMYL).

**Massgabe:** Das GitHub-Repository **https://github.com/redshift-three67/naturheilpraxis-eeat** (Branch `main`) ist die alleinige Referenz für Status, Snippets, Workflow und Archive. Lies zuerst:

1. `docs/session/HANDOFF-2026-08-14.md`
2. `docs/session/CURRENT.md`
3. `docs/WORKFLOW.md`
4. `docs/SCHEMA-STRATEGY.md`

**Umgebung:** Lokaler Debian-Server, Grok Build CLI. Weiterarbeit **strikt über Chrome CDP Live**. Vor dem Start den **CDP-Port prüfen**, sodass keine Überschneidung mit anderen lokal laufenden Chrome/CDP-Sessions entsteht. Port und Session in der Dokumentation festhalten.

**Pflicht vor jedem Write:**
1. Zu ändernde Dateien/Snippets/Meta unter `archive/YYYY-MM-DD/prewrite/` archivieren
2. Genau einen Live-Schritt ausführen (CDP sichtbar)
3. Live verifizieren (Frontend, Cache-Bust)
4. Bei Fehler: Rollback und Wiedervorlage an den Auftraggeber
5. Bei Erfolg: unter `archive/YYYY-MM-DD/` dokumentieren und `docs/session/CURRENT.md` aktualisieren

**Ist-Stand (erledigt):** TQW-01 robots https · TQW-02 Schema HFCM #6 · TQW-03 Rank Math Metas · TQW-04 Disclaimer+Autor HFCM #7. Staging deaktiviert.

**Erster Auftrag in dieser Session:** Repository pullen, HANDOFF lesen, Live-Status gegen das Repo validieren, CDP-Port kollisionsfrei setzen. **Noch keine inhaltlichen Änderungen**, bis Validierung und Port-Check bestätigt sind.

---
