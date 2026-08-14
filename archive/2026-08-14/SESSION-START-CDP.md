# SESSION-START – Chrome CDP Live (Debian / Grok Build)

**Datum:** 2026-08-14 20:56 CEST  
**Umgebung:** Live https://rauch-heilpraktiker.de  
**Transport:** Chrome CDP (kein Write)  
**Status:** validated – CDP bereit, WP-Login sichtbar, **kein Admin-Login** (keine Secrets aus Alt-Chats)

## Git

- `git pull`: Already up to date (`main` @ `13ea34d`)
- Working tree: clean vor dieser Dokumentations-Commit

## Pflichtlektüre

- `docs/session/HANDOFF-2026-08-14.md` gelesen
- `docs/session/CURRENT.md` gelesen
- `docs/WORKFLOW.md` gelesen
- `docs/SCHEMA-STRATEGY.md` gelesen

## CDP-Port (kollisionsfrei)

| Session | Port | Status |
|---------|------|--------|
| Lovable (fremd) | `9223` | belegt – nicht anfassen |
| Sunclinic (fremd) | `9225` | belegt – nicht anfassen |
| **rauch-heilpraktiker.de (diese Session)** | **`9224`** | **gewählt / exklusiv** |

- Bind: `127.0.0.1:9224`
- Chrome: `147.0.7727.116`
- User-Data-Dir: `/tmp/chrome-rauch-heilpraktiker-cdp`
- Start-PID (Browser): `3559726`
- WebSocket: `ws://127.0.0.1:9224/devtools/browser/…`
- Display: `:10.0`

9222/9226+ waren frei; 9222 absichtlich nicht genommen (Default-Kollisionsrisiko).

## Live gegen Repo (Cache-Bust + CDP)

| Check | Ergebnis |
|-------|----------|
| Staging-Marker | keine |
| robots.txt Sitemap | `Sitemap: https://rauch-heilpraktiker.de/sitemap.xml` |
| Home JSON-LD | 7 Blöcke |
| MedicalClinic + Physician `#clinic` | **1×**, byte-gleich zu `snippets/schema-medicalclinic-physician.html` |
| Disclaimer `#eeat-disclaimer-author` | vorhanden (Home + `/nls-diagnostik/`) |
| „ersetzen keine ärztliche Diagnose“ / keine Heilversprechen / Stand August 2026 | vorhanden |
| WP-Login | HTTP 200, Formular (User/Pass/Anmelden) sichtbar |
| `/wp-admin/` unauth | 302 → `wp-login.php?redirect_to=…/wp-admin/` |

CDP-Endstand: Tab offen auf `https://rauch-heilpraktiker.de/wp-login.php`  
Titel: `Anmelden ‹ Naturheilpraxis Rauch – WordPress`

## Beobachtung (kein Write)

Rank Math `meta name="description"` und `og:description` fehlen aktuell im **Frontend-HTML** (Home, Kontakt, NLS, Bioresonanz; curl + CDP). TQW-03 hatte Metas per REST gesetzt. Mögliche Ursachen laut `docs/plugin-conflicts-2026-08-14.md`: Ausgabe-Konflikt (noindex SEO / Speed-Plugins) oder Rank-Math-Frontend-Modul. **Keine Korrektur in diesem Schritt.**

## Nicht ausgeführt (Absicht)

- Kein WP-Admin-Login (aktuelle Zugangsdaten nur vom Auftraggeber)
- Keine Plugin-Deaktivierung
- Keine Inhalts-/Snippet-/Meta-Writes
