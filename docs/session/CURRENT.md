# Session CURRENT – rauch-heilpraktiker.de

Stand: 2026-08-14 21:01 CEST

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
- WP-Admin: **eingeloggt** über CDP (Anzeige „Administrator“ / Konto `Redshift-Three`)

## Live-Kernstatus (re-validiert 20:56 CEST, Cache-Bust + CDP)

- TQW-01…04 erledigt (siehe archive/2026-08-14/)
- robots Sitemap: `https://rauch-heilpraktiker.de/sitemap.xml`
- HFCM #6 Schema ON, #5 OFF, #7 Disclaimer+Autor ON
- Frontend: 1× MedicalClinic+Physician (identisch Repo-Snippet)
- Disclaimer sitewide sichtbar
- Rank Math SEO **aktuell INAKTIV** (inkl. old/PRO-Kopien) → erklärt fehlende Frontend-Metas
- snip pro **ON**, Schema & Structured Data **ON**, HFCM **ON**, noindex SEO **ON**

## Workflow

Siehe `docs/WORKFLOW.md` – Prewrite → Live → Verify → Dokumentieren / Wiedervorlage

## Nächster Schritt (Freigabe nötig)

1. ~~WP-Admin-Login~~ erledigt (CDP 9224)
2. Schema-Plugin-Bereinigung (`snip pro` → Schema-Plugin) **nur nach expliziter Freigabe**
3. Rank Math wieder aktivieren **nur nach Freigabe** (TQW-03-Metas + Frontend-Ausgabe)
4. LocalBusiness-Doppelung prüfen

Protokolle: `archive/2026-08-14/SESSION-START-CDP.md`, `archive/2026-08-14/SESSION-ADMIN-LOGIN.md`
