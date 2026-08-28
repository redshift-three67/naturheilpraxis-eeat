# LLM / Entwickler – rauch-heilpraktiker.de

Working directory: `/home/klaus999/projects/naturheilpraxis-eeat`  
GitHub `redshift-three67/naturheilpraxis-eeat` · `main` ist die Massgabe. Nach Doku- oder Snippet-Änderungen **pushen**, sonst driftet lokal von GitHub.

## Zuerst lesen

1. [`docs/STATUS.md`](docs/STATUS.md) — erledigt, offen, nächster Schritt  
2. [`docs/WORKFLOW.md`](docs/WORKFLOW.md) — Prewrite → Live → Verify  
3. [`docs/entwickler-handover-eeat-2026-08/README.md`](docs/entwickler-handover-eeat-2026-08/README.md)

Nicht als offenen Auftrag lesen: `docs/session/PROMPT-FORTSETZUNG.md` (Stand 14.–15.08., historisch).  
`docs/07-breitenberger-inhaltsmaschine.md` = **nicht umsetzen** (Beschluss 20.08.).

## Jetzt

Phase **PAUSE / Messung**. Keine Site-Writes, keine Ads, keine neue Schrift, keine Krankheits-Hubs.

Nächstes anderes Projekt: **sunclinic.ch** — Prinzipien in `docs/entwickler-handover-eeat-2026-08/08-uebertragbare-erkenntnisse.md`. CDP Sunclinic **9225**. Dieses Repo nicht für Sunclinic-Writes nutzen.

## Live (nur mit Auftrag)

- CDP `127.0.0.1:9224` exklusiv (nicht 9223 Lovable, nicht 9225 Sunclinic)  
- YMYL/HWG: kein Heilversprechen; Disclaimer nur HFCM #7; Schema nur HFCM #6  
- Snippets nur aus `snippets/` nach HFCM spiegeln  
- Cache-Bust: Super Cache leeren, nie `?s=1`
