# Welle B – Optik Start/Hubs + Anamnese-Hub

Stand: 2026-08-17 · nach Typo A1–A4 · Mobil zuerst  
Google: Page Experience / YMYL-Trust, keine Pixel-Vorschrift. B5 nur als Ordnung (eine Skala, klare Kante), kein Klon.

## Konsolidat a–h

| ID | Auftrag | Ort | Technik |
|----|---------|-----|---------|
| **B-a** | Textbereich der Frontseite bleibt **als Spalte mittig** (Container), Zeilen darin an der H1-Kante | nur Start | keine Vollfläch-Linksbündigkeit am Viewport |
| **B-b1** | Unterer „Jetzt Termin buchen“ (vor „Therapieverfahren von…“) **weg** | Start | Original-YOO-Karte aus, nur CTA-Paar nach Ziel-Satz |
| **B-b2** | Gleichmäßige Absatzabstände; **Bild+Text-Raster oben rechts unverändert** nach unten | Start + Hubs, Kinder nur wo nötig | `p`-Rhythmus; `uk-grid` mit Bild nicht anfassen |
| **B-c** | Slogan in einer Flucht mit der H1, wieder **fett** | Start + Hubs | `font-weight: 700`, gleiche linke Kante wie H1 |
| **B-d** | Local-Bar eine Stufe kleiner, linksbündig zur H1 | Start + Hubs | 14 px, `justify-content: flex-start` |
| **B-e1** | „Ziel der Arbeit … im Alltag“ wie „… zentrale Fokus … in meiner Praxis“ | Start | Klasse `eeat-ziel` = Fokus-Stil |
| **B-e2** | Eigene Hub-URL **Online-Anamnesebogen**, kurz, ohne Claims, auch ohne Kindseiten | neu `/online-anamnesebogen/` | wie andere Hubs: H1+Slogan+Bar+Skala |
| **B-f** | „Therapieverfahren von Peter Rauch …“ auf Niveau von „Weitere mögliche Therapieverfahren …“ | Start | gleiche Schriftstufe (24) |
| **B-g** | Footer-Menü Impressum/Datenschutz/… nutzbarer | sitewide | Pipes raus, 44 px, klare Trenner |
| **B-h** | Mobil weiter führen | alle angefassten URLs | Tap, Kontrast, keine CLS durch Raster-Änderung |

Nicht in dieser Welle (nach allen Wellen + Durchsicht): neue Schriftfamilie, Farb-Rebrand, Karten-iframe.

## Reihenfolge

1. B-a/c/d/b2/f/g + B-b1 + B-e1 an bestehenden Snippets (ein Live-Batch CSS/JS).  
2. B-e2 neue Seite + Cluster/Bar-Pfad + Footer-Link + Themen-Link.  
3. Verify Mobil 390 / Desktop 1280, Start + 1–2 Hubs + neue Seite.  
4. **Kind-Skala live 17.08.:** `eeat-type-a` gilt für alle Frontend-Seiten. Local-Bar weiter nur Start+Hubs. Bild+Text-Raster unverändert.
5. **Slider/Intro live:** Overlay-Schrift proportional (mobil 16/13/12, Cover ~44 % statt 61 %). NLS-Folie: „NLS – Diagnostik“ / „Metatron Hospital“. Seiten-H2: „mit dem Metatron Hospital System“. Start-Block „Ich begleite … Themen“ zentriert.

## Anamnese-Hub (Inhalt, HWG)

H1: `Online-Anamnesebogen in Augsburg`  
Title: `Online-Anamnesebogen in Augsburg \| Naturheilpraxis Rauch`  
Sichtbar: Aufnahme vor dem Termin; keine Diagnose; kein Notfall; Link zum Bogen (Lovable, neues Fenster); NAP/Bar.  
Cluster: eigener Hub, keine Kinderliste.
