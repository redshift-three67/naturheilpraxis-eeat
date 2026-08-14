# Session CURRENT – rauch-heilpraktiker.de

Stand: 2026-08-14 21:54 CEST

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
- JSON-LD: 1× HFCM MedicalClinic+Physician + Rank-Math (Organization/WebSite/WebPage/Person)
- **Lokales SEO-Modul OFF** (SCHEMA-04) – kein HealthAndBeautyBusiness / LocalBusiness mehr

## Workflow

Siehe `docs/WORKFLOW.md` – Prewrite → Live → Verify → Dokumentieren / Wiedervorlage

## Nächster Schritt

1. ~~WP-Admin-Login~~ erledigt
2. ~~SCHEMA-01 snip pro aus~~
3. ~~SCHEMA-02 Schema-Plugin aus~~
4. ~~SCHEMA-03 Rank Math an~~
5. ~~SCHEMA-04 Lokales SEO aus~~ live_verified
6. ~~META-01 NLS-Titel~~
7. ~~NOINDEX-01 EAV+BIT index~~
8. ~~META-02 Umlaute + BIT-Titel~~ live_verified

noindex-SEO-Plugin: **0/110 Optionen an** – nur Konflikt-Warnung, keine globalen noindex-Regeln.  
9. ~~META-03 NLS-Keywords~~
10. ~~META-04 YMYL-Titel~~
11. ~~META-05 restliche Werbetitel (8 Seiten)~~ live_verified
12. META-06: restliche Claim-/ASCII-Metas (Darm, Manuell, Komplex-Homöopathie, Psychotherapie, NAET)
