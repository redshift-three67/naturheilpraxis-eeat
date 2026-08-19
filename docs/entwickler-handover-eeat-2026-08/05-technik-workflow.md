# 05 – Technik und Workflow

## Pflichtablauf

Quelle: `docs/WORKFLOW.md`.

1. **Prewrite** nach `archive/YYYY-MM-DD/prewrite/` (ID, Ort, alter HTML/JSON).  
2. **Ein** logischer Live-Schritt.  
3. **Verify** am öffentlichen Frontend, Cache geleert.  
4. Erfolg: Archiv-Markdown + `docs/session/CURRENT.md`. Fehler: Rollback + Auftraggeber.

## CDP

| | |
|--|--|
| Endpoint | `http://127.0.0.1:9224` |
| Playwright | `NODE_PATH=/home/klaus999/apps/web/node_modules` |
| Profil | `/tmp/chrome-rauch-heilpraktiker-cdp` |
| Fremd | 9223 Lovable · 9225 Sunclinic – nicht anfassen |
| YOO speichern | `process.exit(0)`, kein `page.close()` |
| Untere YOO-Kacheln | erst nach `scrollTop = scrollHeight` im Builder sichtbar |

## Cache

| Schicht | Regel |
|---------|--------|
| WP Super Cache | Simple. Exclude `/kontakt`, `/anamnese`, `wp-json`, GET, Login |
| Andere Speed-Plugins | Autoptimize, Asset CleanUp, Async JavaScript, Speed Booster **aus** |
| Plesk | Statischer Cache / Cache-Control vom Betreiber |
| Verify-Query | `?v=…` oder Cache-Flush. **Nie** `?s=1` (Suche). `?m=1` kann loopen |

## Rank Math

| Einstellung | Soll |
|-------------|------|
| Plugin | nur `seo-by-rank-math/` |
| PRO old | aus |
| Modul Lokales SEO | **aus** |
| Title-Case | aus |
| Seiten-Schema-Typ | Standard **Keiner** (Welle 18) |
| robots | `index, follow` auf den Verfahrensseiten |
| Article-JSON | Generator hat oft kein Beschreibungsfeld; sichtbarer Claim wird per #15 im DOM entfernt |

## YOOtheme

- Hubs und die meisten Verfahren = Builder-Layouts.  
- Anamnese-Hub 6705 = Gutenberg-Content + per JS vollbreiter Slider-Klon.  
- Manche Slider-Felder (NLS-Layer) sind im Builder nicht erreichbar → HFCM #15 schreibt den DOM.  
- Bild+Text-`uk-grid` nicht über globale `p`-Marginen verbiegen.

## Plugins – Soll nach der Konfliktanalyse

Aus: snip pro, Schema & Structured Data, noindex-SEO (Optionen leer / Plugin aus), Rank Math PRO old, Speed Booster, Async JS, Autoptimize, Asset CleanUp.

An: HFCM, Rank Math (Kern), YOOtheme, Super Cache, Robots.txt Editor, übliche Backup/ACF.

Historie: `docs/plugin-conflicts-2026-08-14.md` (Ist von vor SCHEMA-01; Live-Soll ist die Tabelle oben).

## Rollback-Orte

| Schicht | Rollback |
|---------|----------|
| HFCM | CodeMirror aus `archive/…/prewrite/*hfcmN-before.html` |
| Rank Math Title/Meta | `*-rankmath-before.json` / `*-before.json` |
| YOO-Text | `w13-texts` sind der **neue** Stand; Vorher in `prewrite/w13-*-before.json` |
| Seite 6705 | `archive/2026-08-17/prewrite/ana-hub-content-before.json` bzw. `snippets/anamnese-hub-content.html` zurücksetzen |
| Menü 12/39 | URL wieder setzen (Prewrite `ana-menu12/39-before.json`) |
| Versus-Slug | Seite 896 Slug zurück + 301 in 404 Solution entfernen |
| Schema-Plugins | Nur nach Strategie-Update wieder an – in der Regel **nicht** |

## Typische Fallstricke

1. `?s=1` zerstört die Verify-URL (Suche).  
2. UIkit `visibility:hidden` + Scrollspy: `innerText` wirkt leer, `textContent` nicht. Ziel-Satz auf der Startseite deshalb sichtbar zwingen.  
3. Leere YOO-`uk-panel` mit `<p></p>` erzeugen Lücken – #11 klappt sie; Zellen **mit** Bild nicht anfassen.  
4. Lovable-Remap darf den Hub-Button `.eeat-anamnese-app-link` nicht umbiegen.  
5. Home-Slider-Folie Anamnese hat oft einen unsichtbaren Wrap-`<a>` ohne das Wort „Anamnese“ – Remap alle Slideshow-`lovable.app`-Links auf der Startseite.  
6. Super Cache nach jedem HFCM-Write leeren, sonst sieht der Verify den alten Footer.
