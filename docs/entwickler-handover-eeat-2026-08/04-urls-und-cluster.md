# 04 – URLs, Hubs, Cluster

Sitemap: `https://rauch-heilpraktiker.de/sitemap_index.xml` (64 https-URLs, Plesk).

## Start und Hubs

Local-Bar (Anrufen / Route / Mo–Fr 10–12:30 / 13–19) nur hier.

| Rolle | Pfad | Title/H1-Linie |
|-------|------|----------------|
| Pillar / Start | `/` | Heilpraktiker Augsburg – Naturheilpraxis Peter Rauch |
| NLS | `/nls-diagnostik/` | NLS-Diagnostik in Augsburg |
| Bioresonanz-Vergleich (Hub) | `/bioresonanz-und-elektroakupunktur/` | … in Augsburg (301 von `/bioresonanz-versus-elektroakupunktur/`) |
| Bioresonanz-Landing (Slider-Quelle) | `/bioresonanz-therapie/` | Quelle des 4-Folien-Sliders auf dem Anamnese-Hub |
| Naturheilkunde | `/naturheilkunde/` | Naturheilkunde in Augsburg |
| Psychotherapie | `/psychotherapie-augsburg/` | schon mit Augsburg |
| Manuell | `/manuelle-therapieverfahren-uebersicht/` | … in Augsburg |
| Schmerz | `/schmerztherapie-augsburg/` | Schmerztherapie Augsburg |
| BIT | `/biophysikalische-informationstherapie-bit/` | BIT Augsburg |
| Anamnese-Hub | `/online-anamnesebogen/` | Online-Anamnesebogen in Augsburg · WP-ID **6705** |

Hub-Titles enthalten **nicht** das Pillar-Keyword „Heilpraktiker Augsburg“.

## Anamnese-Fluss (Endstand)

```
Menü / Start-CTA / FAQ / Kontakt-Satz / Download-Remap
        →  /online-anamnesebogen/
                →  Button.eeat-anamnese-app-link
                        →  https://naturheilpraxis-rauch.lovable.app/  (neues Fenster)
```

## Cluster (HFCM #13)

Kindseiten bekommen eine Themenliste **über** dem Disclaimer, nicht auf Start/Hubs (Ausnahme: Anamnese-Hub zeigt Start + Kontakt, keine Kinder).

Gruppen in `snippets/kindseiten-cluster.html`:

| Gruppe | Übersicht | Beispiele |
|--------|-----------|-----------|
| NH | `/naturheilkunde/` | Klassische/Komplex-Homöopathie, Phyto, NAET, Darm, Injektion, Orthomolekular |
| PSY | `/psychotherapie-augsburg/` | Hypnose, Heilmeditation, Qigong |
| DIAG | `/nls-diagnostik/` bzw. Hinweisdiagnostik | EAV, Iris, Frequenz, Vieva, Labor, Urin, Stuhl, BIT |
| BIO | `/bioresonanz-therapie/` als Label „Bioresonanz“ | versus-Seite, Nadeln, 150 MHz, … |
| MAN | `/manuelle-therapieverfahren-uebersicht/` | IMT, Osteo, Lowen, Micro, Physio, Rehab |
| LOWEN | unter Manuell | Lowen-Kinder |

Texte der Wellen 13–16 liegen als gesetzter HTML-Stand unter:

- `archive/2026-08-16/w13-texts/`
- `archive/2026-08-16/w14-texts/`
- `archive/2026-08-16/w15-texts/`
- `archive/2026-08-16/w16-texts/`

## Legal / Utility

| Pfad | Stand |
|------|--------|
| `/impressum/` | NAP = #7 / Schema, nicht umgeschrieben |
| `/datenschutzerklaerung/` | Meta ergänzt |
| `/datenschutzerklaerung-tools/` | Meta ergänzt |
| `/heilpraktiker-rechtshinweise/` | Meta ergänzt |
| `/rechtshinweise-therapieverfahren/` | Meta ohne „Sanfte, holistische…“ |
| `/gesundheitsrelevante-dokumentation/` | H1 korrigiert (war Impressum) |
| `/corona-praxis-offen/` | **noindex**; #14 historischer Kasten |
| `/downloadbereich-naturheilpraxis-rauch/` | Anamnese-Download → Hub. Weitere `/download/…` oft 404 |

## Kontakt / Termin

| Ziel | URL |
|------|-----|
| Kontaktseite | `/kontakt/` |
| Telefon | `tel:+498212621462` |
| Online-Termin | ProvenExpert `provenexpert.com/naturheilpraxis-rauch/…#appointment` (Live-Href aus dem vorhandenen Button lesen, nicht hart verdrahten wenn abweichend) |
| Maps | `https://www.google.com/maps/search/?api=1&query=Friedrich-Deffner-Straße+19a,+86163+Augsburg` |
