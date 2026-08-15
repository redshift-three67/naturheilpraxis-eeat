# Prompt-Wortlaut zur 1:1-Fortsetzung (Grok Build / CDP)

Kopiere den folgenden Block unverändert als Session-Start.

---

Du arbeitest lokal auf dem Debian-Server mit der Grok Build CLI an rauch-heilpraktiker.de (YMYL, Naturheilpraxis Peter Rauch, Augsburg).

Massgabe: GitHub-Repository https://github.com/redshift-three67/naturheilpraxis-eeat (Branch main) ist die alleinige Referenz für Status, Snippets, Workflow und Archive. Working Directory: /home/klaus999/projects/naturheilpraxis-eeat. Lies zuerst in dieser Reihenfolge:

1) docs/session/TAGESABSCHLUSS-2026-08-14.md
2) docs/session/CURRENT.md
3) archive/2026-08-14/CHECKPOINT-2026-08-14.md
4) docs/PLAN.md
5) docs/WORKFLOW.md
6) docs/SCHEMA-STRATEGY.md

Arbeitsmodus: strikt Live über Chrome CDP. Vor dem ersten Schritt den CDP-Port ermitteln und so wählen, dass keine Überschneidung mit anderen lokalen Chrome/CDP-Sessions entsteht (historisch diese Session: 127.0.0.1:9224, Profil /tmp/chrome-rauch-heilpraktiker-cdp; 9223 Lovable und 9225 Sunclinic nicht anfassen). Port dokumentieren. WordPress-Admin über CDP; keine Secrets aus alten Chats – aktuelle Zugangsdaten nur vom Auftraggeber. Historischer User: Redshift-Three (Anzeige Administrator).

Änderungsdirektive (höchste Präzision):
A) Zu ändernde Dateien/Snippets/Meta unter archive/YYYY-MM-DD/prewrite/ archivieren
B) Genau einen logischen Live-Schritt per CDP ausführen
C) Live verifizieren (Frontend, Cache-Bust)
D) Bei Fehler: Rollback und Wiedervorlage an den Auftraggeber
E) Bei Erfolg: unter archive/YYYY-MM-DD/ dokumentieren, docs/session/CURRENT.md und docs/PLAN.md aktualisieren; relevante Änderungen nach GitHub pushen

YMYL/HWG: keine Heilversprechen. HFCM #6 Schema und #7 Disclaimer+Autor nicht ohne Auftrag deaktivieren.

Ist-Stand (Tagesabschluss 2026-08-14, nicht erneut machen): TQW-01…04; SCHEMA-01…04; META-01…06; NOINDEX-01; APP-01…05 (Anamnese-Button unter „Jetzt Termin buchen“, Menüs); SPEED-01; SLIDER-01; QW-MENU-METATRON. Rank Math an, Local SEO aus, Sitemap-Modul an. snip pro und Schema-Plugin aus. Staging aus.

Wiedervorlage (Auftraggeber/Plesk, kein stiller Workaround): Live-robots.txt ist eine physische Root-Datei und zeigt weiter Sitemap: https://rauch-heilpraktiker.de/sitemap.xml. Soll: Sitemap: https://rauch-heilpraktiker.de/sitemap_index.xml (Rank Math, bereits 200).

Erster Auftrag dieser Session (noch keine Inhalts-Writes):
1) git pull, Tagesabschluss und Checkpoint gelesen bestätigen
2) Live gegen Repo validieren (Schema 1× MedicalClinic+Physician, Disclaimer #7, Anamnese-Button, Slider-Untertitel, robots-Zeile)
3) CDP-Port kollisionsfrei setzen und dokumentieren
4) CDP-Chrome starten und WP-Admin erreichbar machen
Ist-Stand ergänzt 2026-08-15: UX-01/02 (HFCM #10), APP-06 Anamnese-Rahmen/PE-Breite (HFCM #8).

Erst danach den nächsten offenen Schritt aus docs/PLAN.md (typisch: Plesk-robots wenn freigegeben, sonst CONTENT-01) – genau ein logischer Schritt.

---
