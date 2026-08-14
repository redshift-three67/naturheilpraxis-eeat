# naturheilpraxis-eeat

E-E-A-T / SEO für **https://rauch-heilpraktiker.de** (Naturheilpraxis Peter Rauch, Augsburg).

## Massgabe

Dieses Repository ist die **verbindliche Referenz** für Status, Snippets, Workflow und Archive.

**Knowledge-Basis (mehrere Projekte):** https://github.com/redshift-three67/eeat-optimierung  

**Tagesabschluss 2026-08-14:** [`docs/session/TAGESABSCHLUSS-2026-08-14.md`](docs/session/TAGESABSCHLUSS-2026-08-14.md)  
**Nächste Session:** [`docs/session/PROMPT-FORTSETZUNG.md`](docs/session/PROMPT-FORTSETZUNG.md)  
**Checkpoint:** [`archive/2026-08-14/CHECKPOINT-2026-08-14.md`](archive/2026-08-14/CHECKPOINT-2026-08-14.md)

## Arbeitsmodus (ab 2026-08-14)

- Live only (Staging deaktiviert)
- Weiterarbeit: **Chrome CDP Live** auf Debian (Grok Build CLI)
- CDP-Port vor Session prüfen (keine Kollisionen)
- Ablauf: **archivieren → Live → verifizieren → dokumentieren / Wiedervorlage**

## QuickWins

| ID | Massnahme | Status |
|----|-----------|--------|
| TQW-01 | robots.txt Sitemap https | done |
| TQW-02 | Schema MedicalClinic + Physician (HFCM #6) | done |
| TQW-03 | Rank Math + Meta Descriptions | done |
| TQW-04 | Disclaimer + Autorenbox (HFCM #7) | done |

## Struktur

```
naturheilpraxis-eeat/
├── README.md
├── docs/
│   ├── WORKFLOW.md
│   ├── SCHEMA-STRATEGY.md
│   ├── plugin-conflicts-*.md
│   └── session/
│       ├── CURRENT.md
│       └── HANDOFF-YYYY-MM-DD.md
├── archive/YYYY-MM-DD/
│   ├── TQW-xx-*.md
│   └── prewrite/
└── snippets/
```

## Live-Artefakte

| Artefakt | Live |
|----------|------|
| Schema MedicalClinic/Physician | HFCM **#6** Header ON |
| Disclaimer + Autor | HFCM **#7** Footer ON |
| Meta Descriptions | Rank Math |
| robots.txt | Robots.txt Editor, Sitemap https |
