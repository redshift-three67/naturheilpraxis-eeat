# SYNC – Vollständiger Status-Handoff für CDP-Fortsetzung

**Datum:** 2026-08-14 20:19 CEST  
**Commit-Zweck:** Kompletter Wissensstand Chat → Repo, damit Grok Build auf Debian 1:1 fortsetzt.

## Geschrieben / aktualisiert

- `docs/session/HANDOFF-2026-08-14.md` (kanonischer Fortsetzungs-Stand)
- `docs/session/CURRENT.md`
- `docs/WORKFLOW.md` (CDP + Port-Check)
- `README.md`

## Live-Stichprobe zum Sync-Zeitpunkt

- MedicalClinic: 1
- Disclaimer (ersetzen keine / Heilversprechen): vorhanden
- Autorenbox Stand August 2026: vorhanden
- robots Sitemap: https://rauch-heilpraktiker.de/sitemap.xml
- Staging: deaktiviert

## Nächster Operator-Schritt

Auf Debian: `git pull` → HANDOFF lesen → Live gegen Repo validieren → **CDP-Port prüfen** → erst dann Write-Schritte.
