# 00 – Leitbild und Rahmen

## Praxis

| Feld | Wert |
|------|------|
| Name | Naturheilpraxis Rauch · Heilpraktiker Peter Rauch |
| Adresse | Friedrich-Deffner-Straße **19a**, 86163 Augsburg-Hochzoll |
| Telefon | 0821 2621462 |
| Umkreis (sichtbar, nicht Innenstadt) | Hochzoll, Friedberg, Lechhausen-Ost |
| CMS | WordPress 6.9.x · Theme YOOtheme |
| SEO | Rank Math (`seo-by-rank-math`), Lokales-SEO-Modul **aus** |
| Injektion von Schema/UX | Header Footer Code Manager (HFCM) |
| Cache | WP Super Cache Simple + Plesk statischer Cache (Betreiber) |
| Patientenerfassung | Hub `/online-anamnesebogen/` → App `https://naturheilpraxis-rauch.lovable.app/` |

## Auftrag der Optimierung

1. YMYL/HWG-taugliche Website: keine Heilversprechen, ein Disclaimer, klare Autorschaft.  
2. Eine erkennbare Praxis (NAP, Hochzoll, Person Peter Rauch), nicht ein Verfahren-Katalog ohne Absender.  
3. Eine Sprache auf Start, Hubs und Kindseiten.  
4. Keine Thin-URLs, kein Glossar, kein Product/Service-Schema, kein zweites Disclaimer.  
5. Lokal glaubwürdig für **Augsburg-Ost / Hochzoll / Friedberg** – Innenstadt nicht imitieren.

## Qualitätsmaßstäbe (nicht verhandelbar)

| Maßstab | Umsetzung live |
|---------|----------------|
| HWG | Keine Heilzusagen; Geräte-/Verfahrensnamen ohne Wirksamkeitsversprechen |
| E-E-A-T | Sichtbarer Autor, NAP, FAQ, ein MedicalClinic+Physician, Fortbildungen nur mit Nachweis (noch nicht) |
| Google Helpful Content | Unterscheidbarer Hauptinhalt, keine Farms, Start bleibt die Pillar „Heilpraktiker Augsburg“ |
| Page Experience | Mobil-first, 44-px-Taps, Kontrast, LCP-Slider, Super Cache; keine Pixel-Rezepte als SEO-Zauber |
| B5 (buerofuenf.de) | Nur **Struktur** (eine Typo-Skala, klare Kante) – kein Content-Klon |
| Polinacea | Gleiche Branche, Innenstadt – Lage nicht nachahmen |

## Arbeitsmodus

| Regel | Detail |
|-------|--------|
| Nur Live | Staging deaktiviert |
| Transport | Chrome CDP auf `127.0.0.1:9224` |
| Chrome-Profil | `/tmp/chrome-rauch-heilpraktiker-cdp` |
| WP-Konto | Administrator `Redshift-Three` |
| Änderung | Prewrite unter `archive/YYYY-MM-DD/prewrite/` → ein logischer Schritt → Verify (Cache-Bust, nicht `?s=1`) → Archiv + `CURRENT.md` |
| Fehler | Rollback + Wiedervorlage an den Auftraggeber, keine stillen Workarounds |
| YOO speichern | Nach „Layout speichern“ `process.exit(0)` – **kein** `page.close()` (sonst hängt der Customizer nur scheinbar) |
| Cache-Bust | Super Cache leeren; Query `?s=1` ist WP-Suche, nicht verwenden. `?m=1` kann Redirect-Schleife auslösen |

## Verbote ( durchexerzierte Leitplanken )

- Zweites Disclaimer im Body neben HFCM #7.  
- Product / Service / ProfessionalService-Schema, Glossar-Farm, Orts-Klone.  
- Neue Pillar `/heilpraktiker-augsburg/` – die Startseite **ist** die Pillar.  
- Hub-Titles der Form „Heilpraktiker Augsburg“ (Konkurrenz zur Startseite).  
- Yoast, Rank Math PRO old, parallele Schema-Plugins.  
- Heilversprechen, Symptomkataloge als Indikationslisten, „Diagnose erstellt“.  
- „Sanft Heilen“ als sichtbarer Slogan (nur der Satz „Naturheilkundlich begleiten – Stark im Leben“ bleibt).  
- Innenstadt / Seefelder Straße als Standort.  
- CDP-Port teilen mit Lovable (9223) oder Sunclinic (9225).
