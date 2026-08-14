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

### Ist-Zustand Frontend (Home)

- 1× `@graph` MedicalClinic + Physician (HFCM) ✅
- Zusätzlich: WebSite, Organization, LocalBusiness, Breadcrumb, ItemList (Rank Math / Theme / andere)
- LocalBusiness überlappt inhaltlich mit MedicalClinic → mittelfristig Rank-Math-LocalBusiness abschalten oder auf MedicalClinic konsolidieren

### Zielbild

1. **Ein** fachliches Praxisschema: `MedicalClinic` + `Physician` (HFCM)
2. Rank Math: nur SEO-Meta/Titles/Sitemap; Schema-Typen LocalBusiness/Organization nur wenn nötig und ohne Widerspruch
3. Keine parallelen Schema-Plugins

### Freigabe-Schritte

1. ~~`snip pro` deaktivieren~~ **SCHEMA-01 done** (Home JSON-LD 7→2, HFCM-Schema bleibt 1×)
2. `Schema & Structured Data` deaktivieren → erneut validieren
3. Rank Math reaktivieren → Metas + Schema-Generator; LocalBusiness nur wenn nötig

### Rollback

HFCM #6 deaktivieren; Plugins wieder aktivieren; GitHub-Snippets unter `snippets/`.
