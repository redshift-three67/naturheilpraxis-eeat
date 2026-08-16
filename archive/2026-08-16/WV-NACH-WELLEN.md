# Wiedervorlage nach Wellen 13–16

**Datum:** 2026-08-16 · CDP 9224 · live_verified (soweit umsetzbar)

## Direktive

Die fünf **Wir**-Punkte nach Welle 16. Pin/GBP/`LOC-GEO` bleiben bei Dir bzw. warten auf den Pin. Versus-**Slug** ohne Freigabe nicht umziehen.

## Ergebnis

| ID | Status | Was live |
|----|--------|----------|
| **WV-H2** | live | HFCM **#15** (`snippets/wv-slogans-alts.html`): H2-Slogans „Sanft Heilen / Naturheilkundlich begleiten – Stark im Leben“ ausgeblendet; Bild-`alt` ohne „Sanft Heilen“. Stichprobe 6 URLs: Slogan nicht mehr sichtbar |
| **WV-VERSUS** | teilweise | Bild-`title`/`alt` „versus“ per #15 auf „und“ gesetzt. **Slug** `/bioresonanz-versus-elektroakupunktur/` unverändert (Redirect nur mit Freigabe) |
| **WV-DISC** | live | Kein zweiter Disclaimer im Body (nur HFCM #7 + FAQ-JSON). Hahnemann-Restpanel „Hinweis: Infekte…“ geleert |
| **WV-W13** | live | Hahnemann Eigenversuch/Chinarinde und „homöopathisches Heilen“ geleert. Heilmeditation „Hölle“/Paradies und Kunden-Absatz geleert |
| **WV-RM** | offen | NAET-Article-JSON-LD enthält weiter „loszuwerden“. Rank-Math-Schema-Generator zeigt kein Beschreibungsfeld (wie Welle 12). Nicht still Article abschalten |
| **LOC-GEO** | offen | wartet auf Pin |
| **GBP-PIN / GBP-NAP** | offen | **Du** |

Prewrite: `prewrite/wv-hfcm15-create.json`, `wv-hahnemann-*-before.json`, `wv-heilmed-*-before.json`.

## Rollback

HFCM #15 auf inaktiv. YOO-Felder aus den `wv-*-before.json`.

## Freigabe offen

301 `/bioresonanz-versus-elektroakupunktur/` → sprechender Slug (z. B. `bioresonanz-und-elektroakupunktur`). Ohne Freigabe kein Redirect.
