# Session CURRENT – rauch-heilpraktiker.de

Stand: 2026-08-14 21:10 CEST

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
- **Rank Math SEO ON** (SCHEMA-03, nur `seo-by-rank-math/`; old/PRO bleiben aus)
- Frontend-Metas wieder da (TQW-03-Texte); robots `follow, index`
- **snip pro OFF**, **Schema-Plugin OFF**, HFCM **ON**, noindex SEO **ON**
- JSON-LD: 1× HFCM MedicalClinic+Physician + Rank-Math-Graph (`HealthAndBeautyBusiness`)

## Workflow

Siehe `docs/WORKFLOW.md` – Prewrite → Live → Verify → Dokumentieren / Wiedervorlage

## Nächster Schritt

1. ~~WP-Admin-Login~~ erledigt
2. ~~SCHEMA-01 snip pro aus~~ live_verified
3. ~~SCHEMA-02 Schema-Plugin aus~~ live_verified
4. ~~SCHEMA-03 Rank Math an~~ live_verified (Metas wieder im HTML)
5. SCHEMA-04: Rank-Math-Graph `HealthAndBeautyBusiness` vs HFCM `MedicalClinic` konsolidieren

Protokolle: `SCHEMA-01` … `SCHEMA-03-rankmath-activate.md`
