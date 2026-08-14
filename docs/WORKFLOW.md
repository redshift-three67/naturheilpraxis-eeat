# WORKFLOW – Pflichtablauf (Live)

Direktive für alle technischen und inhaltlichen Änderungen an rauch-heilpraktiker.de.

## Ablauf (strikt)

1. **Pre-Write-Sicherung**
   - Betroffene Dateien/Snippets/Meta-Werte dokumentieren oder exportieren
   - Ablage: `archive/YYYY-MM-DD/prewrite/`
   - Mindestens: ID, Ort (HFCM/Rank Math/Plugin), alter Inhalt/Hash

2. **Änderung Live**
   - Nur nach klarer Freigabe / Auftrag
   - Eine logische Änderung pro Batch (kein Mix aus Schema + Text + Performance)

3. **Verifizierung Live**
   - Öffentliches Frontend (Cache-Bust)
   - Bei Schema: `MedicalClinic` / JSON-LD prüfen
   - Bei Meta: `meta name="description"` prüfen
   - Bei Disclaimer: Text + Links im Footer prüfen

4. **Ergebnis**
   - **Erfolg:** Protokoll in `archive/YYYY-MM-DD/TQW-xx-*.md` + `docs/session/CURRENT.md` aktualisieren
   - **Fehler:** Rollback (Snippet off / Meta zurück) + Wiedervorlage mit Ursache

## Transport-Rangfolge

1. Rank Math REST / HFCM Admin (kontrolliert)
2. WordPress REST (Application Password, wenn Rechte passen)
3. Chrome/CDP nur UI-only und Abnahme
4. Manuell bei 2FA / rechtlichen Bestätigungen

## Verbote

- Keine undokumentierte Live-Änderung
- Kein paralleles Schreiben mehrerer Schema-Systeme ohne Strategie-Update
- Keine Bulk-Inhaltsumschreibungen ohne Pre-Write pro ID
