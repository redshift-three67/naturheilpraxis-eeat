# Start-Karte NLS ohne Hospital-System

**Datum:** 2026-08-15 · CDP 9224 · live_verified

## Sicherung

`prewrite/home-nls-card-before.json`

## Live

Karte „NLS Diagnostik“ auf der Startseite, Inhalt:

| Vorher | Nachher |
|--------|---------|
| Schnell, präzise und schmerzfrei … **Metatron Hospital System** | Die NLS-Diagnostik ist ein ergänzendes Hinweisverfahren. Sie ersetzt keine ärztliche Diagnose. |

Bildtitel nach einem Fehlversuch wieder `NLS Diagnostik`.  
Start-Liste „Metatron Hospital nach Nesterov“ unverändert (nächster Rest). Hub-01 unverändert.

## Rollback

Karten-HTML auf den Wert in `home-nls-card-before.json` (`card_html_before`).
