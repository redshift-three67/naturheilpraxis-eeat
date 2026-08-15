# Umsetzungsplan – rauch-heilpraktiker.de

Stand: 2026-08-15 · siehe Direktive `docs/session/TAGESABSCHLUSS-2026-08-14.md`  
Massgabe: Repo `redshift-three67/naturheilpraxis-eeat` · Live CDP `127.0.0.1:9224` · ein Schritt nach `docs/WORKFLOW.md`

## Erledigt (diese Session-Kette)

Schema-Bereinigung SCHEMA-01…04 · Metas/Titel META-01…06 · Anamnese APP-01…04 (Footer-Menü, HFCM-Leiste, Menü-Reorder, Submenü, Platzierung unter „Jetzt Termin buchen“).

## A – Online-Anamnesebogen / Lovable (jetzt weitgehend fertig)

**Ziel-URL:** `https://naturheilpraxis-rauch.lovable.app/`  
**Anker:** „Online-Anamnesebogen“ + Zusatz „Patientenaufnahme vor dem Termin“  
**Technik:** `target=_blank` `rel=noopener` · kein nofollow (offizielles Praxis-Tool)

### Google-Richtlinien (Outbound / YMYL)

| Regel | Umsetzung |
|-------|-----------|
| Klarer Zweck, kein Cloaking | Anker = Anamnese/Aufnahme, nicht „heilen“ |
| Extern erkennbar | lovable.app, neuer Tab, kein Fake-Unterpfad |
| Kein Link-Schema / kein Spam | 3–4 redaktionelle Plätze, nicht sitewide in jedem Block |
| Hilfreich, nicht irreführend | Kein Diagnose-/Heilversprechen auf dem Button |
| Gesundheitsdaten | Zweck nur Aufnahme; Datenschutz liegt in der App |

### Rest A (optional, nicht blockierend)

- ~~APP-05/07: YOOtheme-Slider-CTA eine Folie~~ done (Duplikat, nicht „Eintrag einfügen“)
- Kontaktseite: ein Satz + gleicher Link
- App-Seite: Impressum/Datenschutz der Praxis sichtbar halten
- Menü-Label in WP „NLS Diagnostik / Metatron Hospital System“ umbenennen (Admin-Menü 12)

## B – Slider (E-E-A-T, SEO, Pagespeed) – nächstes größeres Paket

### E-E-A-T / HWG

- Folientexte „Sanft Heilen – Stark im Leben“ sind werblich/HWG-nah → analog META-04 entschärfen
- CTA „Info zur Psychotherapie“ zeigt auf `/hypnotherapie-augsburg/` → **Mismatch**, Ziel korrigieren oder Label anpassen

### SEO der Verlinkungen

- Interne Folien-CTAs (NLS, Homöopathie, BIT) sind thematisch sinnvoll
- Anker „Info zur …“ sind beschreibend, kein Keyword-Spam
- Kein Follow auf externe App im Slider nötig, wenn intern nur Praxis-URLs

### Pagespeed / mobil (hohe Hebel)

| Hebel | Warum |
|-------|--------|
| Kenburns-Animation aus | teuer auf Mobile (GPU/Compositor) |
| `uk-height-viewport` min 550 reduzieren | frisst First Screen auf dem Handy |
| Bilder WebP/komprimieren, nicht nur YOO-Cache-JPEG | LCP |
| Offscreen-Folien lazy | 4 große Hero-Bilder |
| Autoplay-Interval / Pause prüfen | weniger Main-Thread |

**Paket SLIDER-01:** ~~Untertitel HWG + CTA Psychotherapie-Ziel~~ done  
**Paket SPEED-01:** ~~Kenburns mobil aus + Höhe~~ done (HFCM #9).  
**Paket SPEED-02:** ~~WebP bereits via YOO-Cache; LCP eager~~ done.

## C – Mobile UX / weitere QuickWins

| ID | Thema | Priorität |
|----|--------|-----------|
| UX-01 | ~~Footer-Legal auf XS sichtbar~~ (HFCM #10) | done |
| UX-02 | ~~Cookie-Banner First Screen kompakter~~ (HFCM #10, 109 px) | done |
| UX-03 | „Jetzt Termin buchen“ = ProvenExpert extern – bleibt, Anamnese darunter (done) | — |
| QW-SITEMAP | ~~robots → `sitemap_index.xml`~~ (Plesk 15.08. 07:46 UTC, 64 https-URLs) | done |
| QW-SPEED-PLUGINS | Async JavaScript + Speed Booster Pack aktiv – nach SPEED-01 testen | mittel |
| QW-NOINDEX-PLUGIN | 0/110 Regeln, nur Warnung – später deinstallieren | niedrig |
| QW-MENU-METATRON | ~~Menüpunkt „Metatron Hospital System“~~ → NLS-Diagnostik | done |
| QW-TITELCASE | Rank-Math „Titel großschreiben“ (Nach vs. nach) | niedrig |
| CONTENT-01 | ~~Start + Kernseiten ohne „heilen/lindern/helfe“~~ | done (Rest = 01b) |

## Reihenfolge (verbindlich)

1. ~~APP · SPEED-01 · QW-MENU-METATRON · SLIDER-01~~
2. ~~QW-SITEMAP~~ robots → `sitemap_index.xml`
3. ~~UX-01/02 Cookie + Footer mobil~~
4. ~~Slider-Anamnese-Folie + SPEED-02 WebP/LCP~~
5. ~~HWG-01 Homepage-Tagline~~
6. ~~CONTENT-01 Kern~~ Start + Kontakt/NLS/Impressum/Bioresonanz/Homöopathie/BIT/Psychotherapie
7. ~~CONTENT-01b Slogans + NLS-H2~~  
8. ~~KONTRAST-01 · Start-Absätze/Fett · NLS-Fließtext (Felder 3–7)~~  
9. Offen: Hubs besprechen · Bildunterschriften Metatron · restliche Therapie-Fließtexte

Keine Parallel-Writes. Ein logischer Schritt · Prewrite · CDP · Verify · Archiv.
