# Session CURRENT – rauch-heilpraktiker.de

Stand: 2026-08-15 · HUB-04 Naturheilkunde-Einstieg live_verified

## Massgabe

**GitHub Repository `redshift-three67/naturheilpraxis-eeat` ist die alleinige Referenz.**  
**Knowledge-Basis:** https://github.com/redshift-three67/eeat-optimierung  
**Tagesabschluss:** `docs/session/TAGESABSCHLUSS-2026-08-14.md`  
**Nächster Session-Prompt:** `docs/session/PROMPT-FORTSETZUNG.md`  
**Restore:** `archive/2026-08-14/CHECKPOINT-2026-08-14.md`  
Handoff-Historie: `docs/session/HANDOFF-2026-08-14.md`

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
- robots Sitemap: `https://rauch-heilpraktiker.de/sitemap_index.xml` (Plesk, 07:46 UTC, 64 https-URLs)
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
11. ~~META-05 restliche Werbetitel (8 Seiten)~~
12. ~~META-06 Claim-/ASCII-Metas (5 Seiten)~~ live_verified
13. ~~APP-01…05 Anamnesebogen~~ inkl. Button-Stil unter „Jetzt Termin buchen“
14. ~~SPEED-01~~ Kenburns mobil aus, Slider-Höhe reduziert
15. ~~QW-MENU-METATRON~~ NLS-Label ohne Hospital (Rauch-Punkt korrigiert)

16. ~~SLIDER-01~~ Untertitel ohne „Sanft Heilen“; Psychotherapie-CTA → `/psychotherapie-augsburg/`
17. ~~QW-SITEMAP~~ Live-robots `sitemap_index.xml` (64 https-URLs)
18. ~~UX-01~~ Footer-Legal auf XS sichtbar (HFCM #10)
19. ~~UX-02~~ Cookie-Banner mobil 109 px statt 190 px (HFCM #10)
20. ~~APP-06~~ Anamnese-Button: PE-Breite + Rahmen `#8ec760` (HFCM #8)
21. ~~APP-07~~ Slider-Folie Online-Anamnesebogen (YOO-Duplikat, Folie 1)
22. ~~SPEED-02~~ Folien bereits WebP; LCP `eager`/`high` (HFCM #9)
23. ~~HWG-01~~ Start-Tagline ohne „heilen“
24. ~~CONTENT-01~~ Starttexte + Slogan/Slider Kernseiten
25. ~~CONTENT-01b~~ restliche Slogans (48) + NLS-H2 ohne „Hospital“
26. ~~HUB-01~~ Startseite Einstieg (Termin + Grenzen + Themenlinks)
27. ~~pagespeed.de~~ Mobil 79 / Desktop 97 · Archiv `PAGESPEED-2026-08-15.md`
28. ~~HUB-02~~ NLS als Diagnostik-Einstieg (Hinweis + Kindlinks)
29. ~~HUB-03~~ Bioresonanz-Einstieg (Hinweis + Kindlinks)
30. ~~pagespeed.de 13:48~~ Mobil 82 / Desktop 97 · `PAGESPEED-2026-08-15-1348.md`
31. ~~SLIDER-NLS~~ erste Folie: Metatron Hospital (nur Slider)
32. ~~HUB-04~~ Naturheilkunde-Einstieg (Einleitung + Kindlinks)

CDP-Hinweis: nach „Layout speichern“ `process.exit(0)` – kein `page.close()`. Der „hängende Customizer“ war Playwright beim Schließen des Tabs, nicht ein fehlgeschlagenes Speichern.

Siehe `docs/PLAN.md`.

Vollständiger Plan: `docs/PLAN.md`

Audit ~68 URLs: notwendige Werbe-/Claim-Titel und -Metas der Hauptseiten sind bereinigt.  
Nicht nötig (Unterseiten/Legal/dünne Auto-Metas, IMT/Lowen-Strukturseiten, Rank-Math-Großschreibung).
