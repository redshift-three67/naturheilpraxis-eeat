# 03 – HFCM und kanonische Snippets

Live-Plugin: **Header Footer Code Manager**. Änderungen **nur** über die Repo-Datei, dann CodeMirror in `wp-admin/admin.php?page=hfcm-update&id=N` setzen, Marker prüfen, speichern, Super Cache leeren.

Admin-UI nach Speichern nicht mit Playwright `page.close()` beenden.

## ID-Karte (Stand 17.08.2026)

| ID | Name (ungefähr) | Lage | Datei in `snippets/` | Rolle |
|----|-----------------|------|----------------------|-------|
| 5 | MedicalClinic Duplikat | Header | — | **OFF** lassen |
| **6** | MedicalClinic + Physician | Header, All | `schema-medicalclinic-physician.html` | Einziges Fachschema. Geo 48.339465 / 10.948931. Hours Mo–Fr 10–12:30 / 13–19. areaServed Augsburg, Hochzoll, Friedberg. Kein `priceRange`, kein `medicalSpecialty` |
| **7** | Disclaimer + Autor + FAQ | Footer, All | `disclaimer-autorenbox.html` | Einziger Disclaimer. NAP, Tel 44 px, FAQ 01–06, FAQPage JSON-LD |
| **8** | Online-Anamnese | Footer + JS | `online-anamnese-footer.html` | CTAs Start/PE → Hub. Auf dem Hub: Lovable-Button nicht injizieren; Bio-Slider vor `#tm-main` schieben; Lovable-Remap außer `.eeat-anamnese-app-link` |
| **9** | Slider / LCP / Mobil | Header | `speed-slider-mobile.css` | Kenburns mobil aus; erstes Folien-`src`/`eager`/`high`; Preload; Höhe 240 / 380; sizes 100vw; Hospital nur in Alt-Strip wo definiert |
| **10** | Footer + Cookie + BNI | Header | `ux-mobile-footer-cookie.css` | Legal ohne Pipes, 44 px, Middot. Cookie kompakt. BNI max 72/110. Footer- und Nav-Remap Lovable→Hub |
| **11** | Typo, Kontrast, Leerblöcke | Header | `contrast-readability.css` | `html.eeat-type-a` sitewide. Kontrast. Overlay-Skalierung. Leere p/h/panel/volle-Breite-Leerzellen zu. Scrollspy-Text sichtbar |
| **12** | Kontakt-Satz | Footer | `kontakt-anamnese-satz.html` | Nur `/kontakt/`. Link = Hub |
| **13** | Kindseiten-Cluster | Footer | `kindseiten-cluster.html` | Nav vor Disclaimer auf Kindseiten. Map inkl. `/online-anamnesebogen/` → Start + Kontakt |
| **14** | Legal Welle 11 | Footer | `legal-w11.html` | Corona-Hinweis auf `/corona-praxis-offen/`. Download-Anamnese → Hub |
| **15** | Slogans / Alts / NLS-Layer | Footer | `wv-slogans-alts.html` | „Sanft Heilen“ aus (nicht den Naturheilkundlich-Slogan). NLS-Slider: Zeile 1 `NLS – Diagnostik`, Zeile 2 `Metatron Hospital`. H2 Hospital System. Versus-Alts. DOM-Claim „loszuwerden“ aus JSON-LD |
| **16** | Skip-Link | Header | `skip-link.html` | „Zum Inhalt“, Ziel `#eeat-main` |
| **17** | Local-Bar + Hub-Punkte | Header | `local-action-bar.html` | Bar nur Start+Hubs+Anamnese. Slogan 700. Hub-Kreis `eeat-hub-link` sitewide im Menü |

Zusätzlich **kein HFCM**, aber kanonisch:

| Datei | Verwendung |
|-------|------------|
| `snippets/anamnese-hub-content.html` | Body der WP-Seite 6705 (Slider-Klon + Text + App-Button) |

## Wie ein Snippet live aktualisieren

```text
1. Datei in snippets/ ändern
2. archive/YYYY-MM-DD/prewrite/hfcmN-before.html aus dem CodeMirror sichern
3. CodeMirror.setValue(neue Datei)
4. Marker-String muss vorkommen, sonst Abbruch
5. „Aktualisieren“
6. Super Cache → Cache leeren
7. Frontend mit harmlosem Query (?v=…) prüfen – nie ?s=1
8. Archiv-Markdown + CURRENT.md
```

Muster-Skript (Playwright über CDP 9224): siehe `/tmp/rauch-cdp-*.js` der Sessions bzw. `archive/2026-08-17/` Prewrite-Läufe.

## JSON-LD-Soll auf einer typischen Seite

1. HFCM #6: `@graph` MedicalClinic + Physician  
2. Rank Math: Organization, WebSite, WebPage und/oder Person  
3. HFCM #7: FAQPage (sichtbarer FAQ-Text muss dazu passen)  
4. **Nicht:** LocalBusiness, HealthAndBeautyBusiness, Product, Service, zweites MedicalClinic (#5)

## Menüs (WordPress)

| Menü-ID | Name | Rolle |
|--------:|------|--------|
| 12 | Rauch HP (Navbar, Mobile) | Hauptnavigation. Anamnese-Item 6480 → `/online-anamnesebogen/` |
| 39 | topmenu | Footer `#nav_menu-7`. Anamnese-Item 6476 → Hub |
| 10 / 8 | Mobile Menu / Main Menu | leer bzw. ungenutzt |
| 145 | Rauch HP Copy | Kopie, nicht die Live-Navbar |

Hub-URLs für den grünen Punkt (`eeat-hub-link`):

- `/nls-diagnostik/`
- `/bioresonanz-und-elektroakupunktur/`
- `/naturheilkunde/`
- `/psychotherapie-augsburg/`
- `/manuelle-therapieverfahren-uebersicht/`
- `/schmerztherapie-augsburg/`
- `/online-anamnesebogen/`

Nicht: Start-„Rauch“, Kontakt, Hamburger `#tm-mobile`.
