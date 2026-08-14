# APP-02 – Online-Anamnesebogen sichtbar (alle Viewports)

**Datum:** 2026-08-14 22:22 CEST  
**CDP:** `127.0.0.1:9224`  
**Status:** live_verified (HFCM). Slider-Versuch zurückgerollt.

## Slider-Versuch (zurückgerollt)

YOOTheme `A Slider v9`: neuer Eintrag speicherte nur das Bild, Titel/Link nicht. Leere 5. Folie live.  
Rollback: Eintrag gelöscht, Layout gespeichert. Frontend wieder **4 Folien**, alle bisherigen CTAs intakt.

## Änderung (dieser Schritt)

Neues HFCM-Snippet **id=8**

- Name: `E-E-A-T Online-Anamnesebogen`
- Type: HTML · Location: **Footer** · Display: **All** · Status: **active** · Devices: both
- Kanonisch: `snippets/online-anamnese-footer.html`

Nicht in Disclaimer #7. Text: **Online-Anamnesebogen** – Patientenaufnahme vor dem Termin.  
`target=_blank` `rel=noopener`.

## Verifizierung

- Home + NLS: `#eeat-online-anamnese` + Footer-Menü-Link (APP-01) = 2× Lovable
- Disclaimer + 1× MedicalClinic unverändert
- Slider 4 Folien

## Rollback

HFCM id=8 deaktivieren. Slider bereits zurückgerollt.
