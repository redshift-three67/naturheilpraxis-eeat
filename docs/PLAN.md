# Umsetzungsplan – rauch-heilpraktiker.de

Stand: 2026-08-14 22:55 CEST  
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

- APP-05: YOOtheme-Slider-CTA **manuell** (eine Folie) – CDP-Builder unzuverlässig
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

**Paket SLIDER-01:** Texte/CTA-Ziele (Inhalt)  
**Paket SPEED-01:** Kenburns aus + Bildgewicht + Viewport-Höhe mobil

## C – Mobile UX / weitere QuickWins

| ID | Thema | Priorität |
|----|--------|-----------|
| UX-01 | Footer-Legal-Menü `uk-visible@s` auf XS unsichtbar – Anamnese jetzt über Hero-Leiste abgedeckt; Legal-Links auf Mobile prüfen | mittel |
| UX-02 | Cookie-Banner überdeckt First Screen | mittel |
| UX-03 | „Jetzt Termin buchen“ = ProvenExpert extern – bleibt, Anamnese darunter (done) | — |
| QW-SITEMAP | `sitemap.xml` ist statisch (Stand 2024); Rank-Math-Sitemap-Modul war aus | hoch |
| QW-SPEED-PLUGINS | Async JavaScript + Speed Booster Pack aktiv – nach SPEED-01 testen | mittel |
| QW-NOINDEX-PLUGIN | 0/110 Regeln, nur Warnung – später deinstallieren | niedrig |
| QW-MENU-METATRON | Menüpunkt „NLS Diagnostik / Metatron Hospital System“ umbenennen | hoch |
| QW-TITELCASE | Rank-Math „Titel großschreiben“ (Nach vs. nach) | niedrig |
| CONTENT-01 | Therapie-Seiten E-E-A-T-Vertiefung (kein Heilversprechen) | mittel |

## Reihenfolge (verbindlich)

1. ~~APP-03/04 Anamnese-Plätze~~ (diese Runde)
2. **QW-MENU-METATRON** (kleiner Live-Schritt)
3. **QW-SITEMAP** (Rank Math Sitemap vs. alte xml)
4. **SLIDER-01** Texte/CTA-Mismatch (YOOTheme, eher manuell oder sehr kleinteilig)
5. **SPEED-01** Slider-Performance mobil
6. UX-01/02 Cookie + Footer mobil
7. CONTENT-01
8. Optional APP-05 Slider-Anamnese manuell

Keine Parallel-Writes. Ein logischer Schritt · Prewrite · CDP · Verify · Archiv.
