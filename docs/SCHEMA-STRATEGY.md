# Schema-Strategie – rauch-heilpraktiker.de

Stand: 2026-08-14 21:07 CEST

## Empfehlung (aktuell optimal)

**Primär: HFCM-kontrolliertes MedicalClinic + Physician**  
**Sekundär: Rank Math für SEO-Technik (Meta, Titles, Sitemap)**  
**Schema-Plugins (Schema & Structured Data / snip pro): deaktivieren**

### Warum

| System | Rolle | Urteil |
|--------|-------|--------|
| **HFCM #6 MedicalClinic + Physician** | YMYL-Kern: Praxis + Heilpraktiker klar modelliert | **Behalten** – kontrollierbar, HWG-tauglich, bereits live_verified |
| **Rank Math** | Meta Descriptions, Titles, Sitemap, Basis-WebSite/Org | **Behalten** – für TQW-03 nötig; Schema-Module später auf Minimum |
| **Schema & Structured Data for WP & AMP** | Generische JSON-LD | **Deaktivieren** – redundant zu HFCM + Rank Math |
| **snip pro** | Weitere strukturierte Daten | **Deaktivieren** – dritte Quelle, Konflikt-/Validierungsrisiko |

### Ist-Zustand Frontend (Home) – nach SCHEMA-04

- 1× `@graph` MedicalClinic + Physician (HFCM) ✅
- Rank Math: Organization, WebSite, WebPage/Article, Person (kein LocalBusiness / HealthAndBeautyBusiness)
- Lokales SEO-Modul: **aus**

### Zielbild

1. **Ein** fachliches Praxisschema: `MedicalClinic` + `Physician` (HFCM)
2. Rank Math: nur SEO-Meta/Titles/Sitemap; Schema-Typen LocalBusiness/Organization nur wenn nötig und ohne Widerspruch
3. Keine parallelen Schema-Plugins

### Freigabe-Schritte

1. ~~`snip pro` deaktivieren~~ **SCHEMA-01 done**
2. ~~`Schema & Structured Data` deaktivieren~~ **SCHEMA-02 done** (nur noch 1× HFCM MedicalClinic+Physician)
3. ~~Rank Math reaktivieren~~ **SCHEMA-03 done**
4. ~~Lokales SEO aus~~ **SCHEMA-04 done** (kein HealthAndBeautyBusiness mehr; fachliches Schema nur HFCM MedicalClinic+Physician)

### Rollback

HFCM #6 deaktivieren; Plugins wieder aktivieren; GitHub-Snippets unter `snippets/`.
