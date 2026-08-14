# naturheilpraxis-eeat

E-E-A-T / SEO-Optimierung für **rauch-heilpraktiker.de**  
(Naturheilpraxis Peter Rauch, Augsburg)

## Arbeitsmodus

- **Nur Live** (Staging deaktiviert)
- Jede Änderung: **Sichern → Live ändern → Verifizieren → Dokumentieren**
- Siehe `docs/WORKFLOW.md`

## QuickWins Status

| ID | Maßnahme | Status | Datum |
|----|----------|--------|-------|
| TQW-01 | robots.txt Sitemap https | done | 2026-08-14 |
| TQW-02 | Schema MedicalClinic + Physician (HFCM #6) | done | 2026-08-14 |
| TQW-03 | Rank Math + Meta Descriptions | done | 2026-08-14 |
| TQW-04 | Disclaimer + Autorenbox (HFCM #7 Footer) | done | 2026-08-14 |

## Repo-Struktur (für Entwickler)

```
naturheilpraxis-eeat/
├── README.md                 # Einstieg + Status
├── docs/
│   ├── WORKFLOW.md           # Pflicht-Ablauf vor/nach Änderungen
│   ├── SCHEMA-STRATEGY.md    # Welches Schema-System warum
│   ├── plugin-conflicts-*.md # Plugin-Risiken
│   └── session/CURRENT.md    # Aktueller Session-Stand
├── archive/
│   └── YYYY-MM-DD/
│       ├── TQW-xx-*.md       # Änderungsprotokoll
│       └── prewrite/         # Roh-Backups vor Änderung
└── snippets/                 # Kanonische HTML/JSON Snippets
```

## Wichtige Live-Artefakte

| Artefakt | Ort auf Live |
|----------|----------------|
| Schema MedicalClinic/Physician | HFCM Snippet **id=6** (Header, active) |
| Disclaimer + Autorenbox | HFCM Snippet **id=7** (Footer, active) |
| Meta Descriptions | Rank Math (post meta `rank_math_description`) |
| robots.txt | Robots.txt Editor Plugin |
