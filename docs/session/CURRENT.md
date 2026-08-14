# Session CURRENT – rauch-heilpraktiker.de

Stand: 2026-08-14 20:56 CEST

## Massgabe

**GitHub Repository `redshift-three67/naturheilpraxis-eeat` ist die alleinige Referenz.**  
Vollständiger Handoff: `docs/session/HANDOFF-2026-08-14.md`

## Umgebung jetzt

- Auftraggeber: lokaler **Debian-Server** + **Grok Build CLI**
- Transport: **strikt Chrome CDP Live**
- **CDP-Port dieser Session: `127.0.0.1:9224`** (exklusiv)
- Fremd-Sessions nicht anfassen: `9223` Lovable, `9225` Sunclinic
- Chrome-Profil: `/tmp/chrome-rauch-heilpraktiker-cdp`
- Staging: deaktiviert
- WP-Admin: Login-Seite über CDP **erreichbar**; **nicht eingeloggt** (keine Alt-Secrets)

## Live-Kernstatus (re-validiert 20:56 CEST, Cache-Bust + CDP)

- TQW-01…04 erledigt (siehe archive/2026-08-14/)
- robots Sitemap: `https://rauch-heilpraktiker.de/sitemap.xml`
- HFCM #6 Schema ON, #5 OFF, #7 Disclaimer+Autor ON
- Frontend: 1× MedicalClinic+Physician (identisch Repo-Snippet)
- Disclaimer sitewide sichtbar
- Rank Math **Frontend-Meta-Descriptions derzeit nicht im HTML** (Abweichung zu TQW-03-REST-Setzung) – Wiedervorlage, kein Write

## Workflow

Siehe `docs/WORKFLOW.md` – Prewrite → Live → Verify → Dokumentieren / Wiedervorlage

## Nächster Schritt (nach Zugangsdaten)

1. WP-Admin-Login **nur mit aktuellen Daten vom Auftraggeber**
2. Schema-Plugin-Bereinigung (`snip pro` → Schema-Plugin) **nur nach expliziter Freigabe**
3. Rank Math: Frontend-Ausgabe der Metas prüfen (Umlaute + fehlende `meta description`)
4. LocalBusiness-Doppelung prüfen

Protokoll Session-Start: `archive/2026-08-14/SESSION-START-CDP.md`
