# Session CURRENT – rauch-heilpraktiker.de

Stand: 2026-08-14 21:09 CEST

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
- Rank Math SEO **INAKTIV** (inkl. old/PRO-Kopien) → fehlende Frontend-Metas
- **snip pro OFF** (SCHEMA-01)
- **Schema & Structured Data OFF** (SCHEMA-02; Home/NLS/Kontakt JSON-LD = 1× HFCM)
- HFCM **ON**, Rank Math **OFF**, noindex SEO **ON**

## Workflow

Siehe `docs/WORKFLOW.md` – Prewrite → Live → Verify → Dokumentieren / Wiedervorlage

## Nächster Schritt

1. ~~WP-Admin-Login~~ erledigt
2. ~~SCHEMA-01 snip pro aus~~ live_verified
3. ~~SCHEMA-02 Schema-Plugin aus~~ live_verified
4. SCHEMA-03: Rank Math wieder aktivieren, Frontend-Metas prüfen
5. LocalBusiness-Doppelung prüfen

Protokolle: `SESSION-START-CDP.md`, `SESSION-ADMIN-LOGIN.md`, `SCHEMA-01-snip-pro-deactivate.md`, `SCHEMA-02-schema-plugin-deactivate.md`
