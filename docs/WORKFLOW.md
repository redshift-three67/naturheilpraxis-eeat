# WORKFLOW – Pflichtablauf (Live + CDP)

Direktive für alle Änderungen an rauch-heilpraktiker.de.

**Übergreifender Leitfaden (mehrere Projekte, LLM/Entwickler):** https://github.com/redshift-three67/eeat-optimierung — ersetzt dieses Repo **nicht**. Live-Status bleibt hier.

## Massgabe

- Repository **redshift-three67/naturheilpraxis-eeat** = Single Source of Truth für **diese** Domain
- Ab 2026-08-14: Ausführung **Chrome CDP Live** auf dem Debian-Server (Grok Build)
- Vor CDP: Port-Kollisionen ausschliessen

## Ablauf (strikt, höchste Präzision)

1. **Pre-Write-Sicherung**
   - Betroffene Snippets/Meta/Dateien archivieren
   - Pfad: `archive/YYYY-MM-DD/prewrite/`
   - Inhalt: ID, Ort, alter Stand (Text/HTML/JSON)

2. **Ein Live-Schritt**
   - Nur ein logischer Change pro Batch
   - Sichtbar über CDP (Admin-UI), sofern CDP-Modus aktiv

3. **Verifizierung Live**
   - Öffentliches Frontend, Cache-Bust
   - Schema / Meta / Disclaimer je nach Change

4. **Ergebnis**
   - **Erfolg:** `archive/YYYY-MM-DD/…md` + `docs/session/CURRENT.md`
   - **Fehler:** Rollback + **Wiedervorlage an Auftraggeber** (keine stillen Workarounds)

## Verbote

- Undokumentierte Live-Writes
- Parallele Schema-Systeme ohne Strategie-Update (`docs/SCHEMA-STRATEGY.md`)
- CDP-Port teilen mit anderen Sessions
