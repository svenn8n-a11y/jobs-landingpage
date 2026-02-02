# Pöppel Jobs Landingpage

Eine moderne, professionelle Landingpage für Jobangebote bei R. Pöppel GmbH & Co. KG - Werkzeugmaschinen und Intralogistik-Spezialist aus Memmingen.

![Version](https://img.shields.io/badge/version-3.9-blue)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)

## 📋 Inhaltsverzeichnis

- [Übersicht](#übersicht)
- [Features](#features)
- [Seitenübersicht](#seitenübersicht)
- [Dateistruktur](#dateistruktur)
- [Installation & Verwendung](#installation--verwendung)
- [Technologie-Stack](#technologie-stack)
- [Browser-Kompatibilität](#browser-kompatibilität)
- [Deployment](#deployment)
- [Changelog](#changelog)

## 🎯 Übersicht

Diese moderne Karriere-Webseite präsentiert die Jobangebote bei R. Pöppel GmbH & Co. KG. Die Webseite wurde nach dem Vorbild von [Baufritz Jobs](https://baufritz-jobs.de/meister-techniker-shk/) entwickelt und mit reinem HTML, CSS und JavaScript umgesetzt – vollständig responsive und ohne externe Abhängigkeiten.

**Kontaktdaten:**
- Firma: R. Pöppel GmbH & Co. KG
- Adresse: Alpenstraße 45, Industriegebiet Süd, D-87700 Memmingen
- Tel: 08331 9559-0
- E-Mail: info@poeppel-wkz.de
- Web: www.poeppel-wkz.de

## ✨ Features

### Design & UX
- ✅ **Struktur und Layout** nach bewährtem Vorbild
- ✅ **Pöppel CI**: Angepasst an Corporate Identity (#be1823 Rot)
- ✅ **Fully Responsive**: Optimiert für Desktop, Tablet und Mobile
- ✅ **Smooth Scrolling**: Sanfte Navigation und Animationen
- ✅ **Hero-Bilder**: Professionelle Headerbilder mit Overlay
- ✅ **Scroll-to-Top Button**: Sticky Button auf allen Seiten (außer Bewerbungs-Funnel)
- ✅ **Silver Gradient Lines**: Metallisch glänzende Silberstreifen als oberer Rand der nachfolgenden Sektionen
- ✅ **Mobile Optimiert**: Background-attachment und Logo-Größe angepasst
- ✅ **Button-Design-System**: Konsistente Farbgebung (Rot auf Weiß, Weiß auf Rot)

### Funktionalität
- ✅ **Übersichtsseite**: Alle offenen Stellen auf einen Blick
- ✅ **Detailseiten**: Ausführliche Stellenbeschreibungen mit aktuellen Benefits
- ✅ **8-stufiger Bewerbungs-Funnel**: Progressives Formular mit Auto-Advance und Scoring
- ✅ **PHP-Mail-Integration**: Bewerbungen werden automatisch an support@poeppel-wkz.de versendet
- ✅ **Multiple CTA-Buttons**: Strategisch platziert für hohe Conversion
- ✅ **Testimonials mit echten Namen**: Authentische Mitarbeiterzitate
  - **Außendienst**: Uwe Hettl (30+ Jahre), Michael Wrage (10+ Jahre), Alois Aschenbrenner (20 Jahre)
  - Alle mit Titel "Top-Verkaufsberater" bzw. "Verkaufsleiter"
- ✅ **Benefits-Grid**: Aktualisiert mit modernen Arbeitgeberleistungen
  - **Innendienst**: Edenred Gutscheinkarte, VWL, Jobrad, Gemeinschaftsraum
  - **Außendienst**: Ohne Altersvorsorge & Flache Hierarchien
- ✅ **Unternehmenswerte**: Visualisiert mit Icons und Mobile-Animationen
- ✅ **Intro-Sektionen**: Kraftvolle Einleitungstexte ("Dein Herz schlägt für den Holzbau...")
- ✅ **Vorqualifizierung**: Präzisierte Fragen (z.B. "Wie viel aktive Kundenansprache?")

### Technisch
- ✅ **Zero Dependencies (Frontend)**: Kein jQuery, keine Frameworks
- ✅ **PHP-Backend**: E-Mail-Versand mit vollständiger Datenübermittlung
- ✅ **Fetch API**: Moderne AJAX-Kommunikation mit Backend
- ✅ **SEO-optimiert**: Semantisches HTML5, Meta-Tags
- ✅ **Performance**: Lazy Loading, optimierte Assets
- ✅ **Accessibility**: WCAG-konform, keyboard-navigierbar
- ✅ **Intersection Observer**: Scroll-triggered Animationen
- ✅ **Glassmorphism**: Moderne UI-Effekte mit backdrop-filter
- ✅ **Fail-Safe**: Bewerbungsformular zeigt immer Erfolgsseite (auch bei Backend-Fehler)

## 🌐 Seitenübersicht

### 1. Übersichtsseite ([index.html](index.html))

**Hero-Sektion:**
- Großflächiges Hintergrundbild (images/headerbild_index.jpg)
- "Karriere bei Pöppel" + Tagline
- Firmenlogo im Header
- Silberstreifen am unteren Rand

**Job-Cards (2 Stellen):**
- 🖼️ **Verkaufsberater Außendienst**: Mit Banner-Bild "Kachel Außendienst.png"
- 🖼️ **Verkaufsberater Innendienst**: Mit Banner-Bild "Kachel Innendienst.png"

**Weitere Sektionen:**
- Statistik-Banner: 100 Jahre, 40+ MA, 1/2 Mio. Artikel (mit Silberstreifen)
- Unternehmenswerte: 4 Säulen (Eigenverantwortung, Miteinander, Innovation, Nachhaltigkeit)
  - Mobile: BounceRotate-Animation auf Icons (lebendiger als Pulse)
- Benefits-Grid: 6 Kategorien mit Icons
  - CTA-Button "Zu den Jobs" nach Benefits-Sektion
- Scroll-to-Top Button (erscheint nach 300px)

### 2. Außendienst-Stellenanzeige ([aussendienst.html](aussendienst.html))

**Stellenprofil:**
- Position: Verkaufsberater Außendienst (m/w/d)
- Standort: Memmingen
- Typ: Vollzeit mit Firmenwagen

**Intro-Sektion:**
- Kraftvoller Einstieg: "Dein Herz schlägt für den Holzbau und Du möchtest Handwerksunternehmen aktiv dabei unterstützen..."
- Problemlöser, Berater und Partner für Kunden aus dem Handwerk

**Inhalte:**
- **Benefits**: 4 Kategorien (aktualisiert)
  - Vergütung & Ausstattung: Gehalt, Firmenwagen, Ausstattung, Prämien (ohne Altersvorsorge)
  - Eigenverantwortung: Verkaufsgebiet, Tourenplanung, kurze Wege, Ideen, unternehmerisches Denken (ohne Flache Hierarchien)
  - Entwicklung: Einarbeitung, Schulungen, Trainings, Karriere
  - Team & Kultur: Familie, Vertriebsteam, Innendienst-Support, Events, Wertschätzung
- **Testimonials** (rote Sektion mit Glassmorphism) - Vollständig überarbeitet:
  - Uwe Hettl, Top-Verkaufsberater Außendienst (Zimmermannsmeister, 30+ Jahre): "Freiheit & Gestaltungsspielraum"
  - Michael Wrage, Verkaufsleiter (10+ Jahre): "Offenheit für Ideen & Unterstützung"
  - Alois Aschenbrenner, Top-Verkaufsberater Außendienst (Zimmermannsmeister, 20 Jahre): "Quereinstieg & Familie"
- **Aufgaben**: Kundenbetreuung, Neukundenakquise, Beratung, Verkaufsabschluss
- **Anforderungen**: 8 Punkte inkl. Fahrerlaubnis
- **Ansprechpartner**: Andreas Bodenmiller (IT-Leitung / Personalleitung, 08331-9559-660, support@poeppel-wkz.de)

**Mobile Optimierungen:**
- Logo auf 30px verkleinert
- Background-attachment: scroll statt fixed
- Silberstreifen auf Hero und Testimonials

### 3. Innendienst-Stellenanzeige ([innendienst.html](innendienst.html))

**Stellenprofil:**
- Position: Verkaufsberater Innendienst (m/w/d)
- Standort: Memmingen
- Typ: Vollzeit, geregelte Arbeitszeiten

**Inhalte:**
- **Benefits**: 4 Kategorien (aktualisiert)
  - Vergütung: Gehalt, Edenred Gutscheinkarte, VWL, Jobrad, Prämien, Rabatte (ohne Urlaubs-/Weihnachtsgeld & Altersvorsorge)
  - Arbeitsklima: Familie, flache Hierarchien, Kommunikation, Wertschätzung, Events, Miteinander
  - Arbeitsplatz: Büroausstattung, IT, Gemeinschaftsraum, helle Räume (ohne ergonomische Plätze & Getränke)
  - Arbeitszeit: Mo-Fr, 30 Tage, keine Schichten, Einarbeitung, Weiterbildung (ohne Flexibilität nach Absprache)
- **Testimonials** (rote Sektion mit Glassmorphism) - Authentische Mitarbeiterzitate:
  - Sarah Birk, Verkaufsberaterin Innendienst: "Strukturierte Einarbeitung & hilfsbereit Kollegen"
  - Maximilian Straub, Verkaufsberater Innendienst Zerspanung: "Familienfreundlichkeit"
  - Harald Hartl, Verkaufsberater Innendienst Holzbau: "Vielseitigkeit & Abwechslung"
- **Aufgaben**: Kundenberatung (gekürzt), Auftragsabwicklung, Betreuung, Lösungsfindung
- **Anforderungen**: 9 Punkte inkl. "Mitgestaltung des Verkaufsraumes und von Verkaufsaktionen"
- **Ansprechpartner**: Andreas Bodenmiller (IT-Leitung / Personalleitung, 08331-9559-660, support@poeppel-wkz.de)

**Mobile Optimierungen:**
- Logo auf 30px verkleinert
- Background-attachment: scroll

### 4. Bewerbungs-Funnel ([bewerben.html](bewerben.html))

**9-10-stufiger Prozess mit Scoring (variiert je nach Stelle):**

**Außendienst (stelle=aussendienst):**
1. **Technische Erfahrung**: Handwerk, Technik, Baubranche (0-10 Punkte)
2. **Verkaufsfreude**: "Wie viel aktive Kundenansprache hast du bisher gemacht?" (0-10 Punkte)
3. **Reisebereitschaft**: Täglich zu Kunden fahren (0-10 Punkte)
4. **Selbstorganisation**: Arbeitstag selbst organisieren (0-10 Punkte)
5. **Digitale Tools**: Offenheit für CRM, Apps (0-10 Punkte)
6. **Verkaufsansatz**: Produkt erklären vs. Problem lösen (5-10 Punkte)
7. **Mini-Praxisfall**: Kundenreaktion (0-10 Punkte)
8. **Erreichbarkeit**: Beste Zeit für Rückruf
9. **Kontaktdaten**: Name, E-Mail, Telefon, Motivation, Fragen (optional), DSGVO

**Innendienst (stelle=innendienst):**
1. **Technische Erfahrung**: Gleich wie Außendienst (0-10 Punkte)
2. **Kommunikationsstärke**: Technische Zusammenhänge erklären (0-10 Punkte)
3. **Multitasking**: Mehrere Aufgaben gleichzeitig (0-10 Punkte)
4. **Digitale Systeme**: Erfahrung mit Ticketsystemen, CRM, ERP (0-10 Punkte)
5. **Beratung im Haus**: Persönliche Kundenberatung vor Ort (0-10 Punkte)
6. **Motivation**: Freitextfeld "Was motiviert Dich als Verkaufsberater bei uns zu arbeiten?"
7. ~~Mini-Praxisfall~~ (übersprungen für Innendienst)
8. **Erreichbarkeit**: Beste Zeit für Rückruf
9. **Verfügbarkeit**: "Ab wann bist Du verfügbar?" (ab sofort / 1-3 Monate / nach Absprache)
10. **Kontaktdaten**: Name, E-Mail, Telefon, Fragen (optional), DSGVO (ohne Motivation-Feld)

**Lagermitarbeiter (stelle=lager):**
1. **Lager-Erfahrung**: Erfahrung in Lagerhaltung/Logistik (0-10 Punkte)
2. **Gabelstapler-Führerschein**: Vorhanden und gültig (0-10 Punkte)
3. **Werkzeug & Handwerk**: Erfahrung mit Werkzeugen oder im handwerklichen Bereich (0-10 Punkte)
   - "Ja, arbeite/arbeitete im Handwerk" (10 Punkte)
   - "Ja, privat handwerklich aktiv" (7 Punkte)
   - "Grundkenntnisse vorhanden" (3 Punkte)
4. **Selbstständigkeit & Verantwortung**: Eigenständiges Arbeiten (0-10 Punkte)
5. **Verfügbarkeit**: Schichtbereitschaft und Flexibilität (0-10 Punkte)
6. ~~Verkaufsansatz~~ (übersprungen für Lager)
7. ~~Mini-Praxisfall~~ (übersprungen für Lager)
8. **Erreichbarkeit**: Beste Zeit für Rückruf
9. **Kontaktdaten**: Name, E-Mail, Telefon, Motivation, Fragen (optional), DSGVO

**Scoring-System:**

*Verkaufspositionen (Außendienst/Innendienst):*
- **Außendienst**: max. 70 Punkte (7 Fragen)
  - 50+ Punkte: "Perfekt! Du passt hervorragend zu uns!"
  - 35-49 Punkte: "Guter Fit! Lass uns sprechen."
  - 20-34 Punkte: "Interessant! Wir melden uns bei dir."
  - <20 Punkte: "Danke für dein Interesse!"
- **Innendienst**: max. 50 Punkte (5 Fragen)
  - 35+ Punkte: "Perfekt! Du passt hervorragend zu uns!"
  - 25-34 Punkte: "Guter Fit! Lass uns sprechen."
  - 15-24 Punkte: "Interessant! Wir melden uns bei dir."
  - <15 Punkte: "Danke für dein Interesse!"

*Lagermitarbeiter:*
- **Lager**: max. 50 Punkte (5 Fragen)
  - 36+ Punkte: 🌟 PERFEKT
  - 25-35 Punkte: ✅ GEEIGNET
  - 15-24 Punkte: 💡 INTERESSANT
  - <15 Punkte: ⚠️ UNPASSEND

**Features:**
- Progress-Bar mit 9-10 Schritten (je nach Position)
- Auto-Advance bei Radio-Auswahl
- **Positionsspezifischer Funnel**: Fragen passen sich automatisch an Innendienst/Außendienst an
- **Intelligente Navigation**: Schritt 7 wird für Innendienst automatisch übersprungen
- Score-basierte Feedback-Nachricht vor Kontaktformular
- Echtzeit-Validierung
- **Motivation-Feld**:
  - **Innendienst**: Freitextfeld in Schritt 6 (Pflicht)
  - **Außendienst**: Textfeld in Schritt 9 Kontaktformular (Pflicht)
- Fragen-Textfeld (optional, grauer Hintergrund): "Hast Du Fragen an uns?"
- Erreichbarkeit-Auswahl (Schritt 8): Vormittags/Nachmittags/Abends/Jederzeit
- **PHP-Mail-Integration**: Automatischer Versand an support@poeppel-wkz.de
- **Datenübermittlung**: Alle Antworten, Score, Kontaktdaten, Erreichbarkeit, Bewertung
- Success-Popup + Success-Seite mit Sicherheitshinweis
- Kein Scroll-to-Top Button (bewusst entfernt für cleane Funnel-UX)

**Mobile Optimierungen:**
- Logo auf 30px verkleinert
- Zurück-Button führt zu index.html#jobs

## 📁 Dateistruktur

```
jobs-landingpage/
│
├── index.html                          # Übersichtsseite mit allen Stellen
├── aussendienst.html                   # Stellenanzeige Verkaufsberater Außendienst
├── innendienst.html                    # Stellenanzeige Verkaufsberater Innendienst
├── bewerben.html                       # 8-stufiger Bewerbungs-Funnel mit Scoring
├── submit-application.php              # PHP-Backend für E-Mail-Versand
├── test-mail.php                       # Test-Script für Mail-Debugging
├── intralogistik-fachkraft.html        # Stellenanzeige Intralogistik (Vorlage)
│
├── images/                             # Bilder und Assets
│   ├── Logo_poeppel.png                # Firmenlogo
│   ├── headerbild_index.jpg            # Hero-Hintergrundbild Index
│   ├── Headerbild_jobs.png             # Hero-Hintergrundbild Jobs
│   ├── Banner Außendienst.png          # Desktop-Banner Außendienst
│   ├── Banner_Aussendienst_mobile.png  # Mobile-Banner (1024×632px, Golden Ratio)
│   ├── Banner Innendienst.png          # Desktop-Banner Innendienst
│   ├── Kachel Außendienst.png          # Job-Card Banner Index Außendienst
│   ├── Kachel Innendienst.png          # Job-Card Banner Index Innendienst
│   └── headerbild_vertrieb.png         # Hero-Hintergrundbild Vertrieb
│
├── README.md                           # Haupt-Dokumentation (diese Datei)
├── .gitignore                          # Große Binärdateien ausgeschlossen
└── Jobs Landingpage.code-workspace     # VS Code Workspace-Datei
```

## 🖼️ Responsive Banner-System

Die Stellenanzeigen verwenden ein intelligentes responsive Banner-System, das automatisch optimierte Bilder für verschiedene Geräte lädt.

### Implementierung

Verwendet wird das HTML5 `<picture>`-Element mit Media Queries:

```html
<picture>
    <source media="(max-width: 767px)" srcset="images/Banner_Aussendienst_mobile.png">
    <source media="(min-width: 768px)" srcset="images/Banner Außendienst.png">
    <img src="images/Banner Außendienst.png" alt="Pöppel Außendienst" style="width: 100%; height: auto; display: block;">
</picture>
```

### Breakpoints

- **Mobile** (`max-width: 767px`): Lädt optimierte Mobile-Version
- **Desktop** (`min-width: 768px`): Lädt hochauflösende Desktop-Version
- **Fallback**: Standard `<img>`-Tag für ältere Browser

### Mobile-Banner Spezifikationen

**Format basiert auf Goldenem Schnitt (φ ≈ 1.618):**
- Dimension: 1024×632px
- Aspect Ratio: ~1.62:1 (nahe am goldenen Schnitt)
- Optimiert für: Bessere Lesbarkeit auf kleinen Bildschirmen
- Dateigröße: ~600KB (komprimiert)

### Vorteile

- ✅ **Performance**: Kleinere Datei für Mobile-Geräte
- ✅ **UX**: Text besser lesbar auf mobilen Displays
- ✅ **Zero JavaScript**: Native Browser-Unterstützung
- ✅ **Automatisch**: Browserbezogene Auswahl ohne Interaktion
- ✅ **SEO-freundlich**: Semantisches HTML mit alt-Attributen

### Verwendete Seiten

- [aussendienst.html](aussendienst.html) (Zeile 895-899)
- [innendienst.html](innendienst.html) (Zeile 908-912)

## 🚀 Installation & Verwendung

### Voraussetzungen
- Moderner Webbrowser (Chrome, Firefox, Safari, Edge)
- Optional: Web-Server für lokale Entwicklung

### Lokal ausführen

**Option 1: Direkt im Browser**
```bash
# Repository klonen
git clone https://github.com/svenn8n-a11y/jobs-landingpage.git

# In Verzeichnis wechseln
cd jobs-landingpage

# index.html im Browser öffnen (Doppelklick)
```

**Option 2: Mit Python Server**
```bash
python -m http.server 8000
# Öffne: http://localhost:8000
```

**Option 3: Mit VS Code Live Server**
1. VS Code Extension "Live Server" installieren
2. Rechtsklick auf index.html
3. "Open with Live Server" wählen

## 🛠 Technologie-Stack

### Core Technologies
- **HTML5**: Semantisches Markup, strukturierte Daten
- **CSS3**:
  - CSS Custom Properties (`:root` Variablen)
  - Flexbox & Grid Layout
  - Media Queries für Responsive Design
  - Smooth Transitions & Animations
  - `clamp()` für Fluid Typography
  - Glassmorphism mit `backdrop-filter`
  - Pseudo-Elemente (::after) für dekorative Effekte
- **Vanilla JavaScript**:
  - ES6+ Features
  - DOM-Manipulation
  - Event-Handling
  - Form-Validierung mit Scoring
  - Smooth Scrolling
  - Intersection Observer API

### Farbschema (Pöppel CI)

```css
:root {
    --primary: #be1823;          /* Pöppel Rot */
    --secondary: #ffe8e9;        /* Helles Rot/Rosa */
    --tertiary: #F6F6F6;         /* Hellgrau */
    --dark: #32373c;             /* Dunkelgrau für Text */
    --accent-green: #8ebf22;     /* Pöppel Grün für Success */
    --white: #ffffff;
}
```

### Silber-Gradient (CI-Element)

Positioniert als `::before` der nachfolgenden Sektion für bessere Sichtbarkeit:

```css
.intro-section::before,
.job-description::before {
    content: '';
    display: block;
    height: 8px;
    background: linear-gradient(90deg,
        #999 0%,
        #aaa 10%,
        #c0c0c0 20%,
        #d3d3d3 35%,
        #e8e8e8 50%,
        #d3d3d3 65%,
        #c0c0c0 80%,
        #aaa 90%,
        #999 100%);
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15),
                inset 0 1px 2px rgba(255, 255, 255, 0.5);
}
```

### Typografie

```css
--font-serif: 'Source Serif Pro', Georgia, serif;  /* Headlines */
--font-sans: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, ...;  /* Body */
```

### Responsive Breakpoints

```css
/* Mobile First Ansatz */
@media (max-width: 768px) {
    /* Mobile & Tablet */
    .logo-img { height: 30px; }
    .hero { background-attachment: scroll; }
}
```

## 🌍 Browser-Kompatibilität

Getestet und kompatibel mit:

| Browser | Version | Status |
|---------|---------|--------|
| Chrome | 90+ | ✅ Vollständig |
| Firefox | 88+ | ✅ Vollständig |
| Safari | 14+ | ✅ Vollständig |
| Edge | 90+ | ✅ Vollständig |
| iOS Safari | 14+ | ✅ Vollständig (background-attachment: scroll) |
| Chrome Android | 90+ | ✅ Vollständig |

**Hinweis**: IE11 wird nicht unterstützt (End of Life)

## 📦 Deployment

### GitHub Pages (Live)

URL: **https://svenn8n-a11y.github.io/jobs-landingpage/**

Deployment-Schritte:
1. Code auf `main` Branch pushen
2. GitHub Actions deployed automatisch
3. Änderungen sind nach ~1 Minute live

### Netlify

1. Netlify Account erstellen
2. "New site from Git" wählen
3. Repository verbinden
4. Deploy settings:
   - Build command: (leer)
   - Publish directory: `/`
5. Deploy klicken

### Traditionelles Hosting (mit PHP-Support)

**Wichtig**: Server muss PHP unterstützen!

Per FTP alle Dateien auf Webserver hochladen:
- index.html (Root)
- aussendienst.html
- innendienst.html
- bewerben.html
- **submit-application.php** (für E-Mail-Versand)
- images/ (alle Bilder)
- Alle anderen Assets

**PHP-Konfiguration prüfen:**
```bash
# Testen ob mail() funktioniert
php -r "mail('test@example.com', 'Test', 'Test');"
```

## 📝 Changelog

### Version 3.9 (Februar 2025) - Aktuell
- 📅 **Neue Frage "Ab wann bist Du verfügbar?" für Innendienst**
  - Vorletzte Frage im Innendienst-Fragebogen (Step 9)
  - 3 Antwortmöglichkeiten: "Ab sofort", "1-3 Monate", "Nach Absprache"
  - Progress-Bar auf 10 Schritte erweitert für Innendienst
  - startDate-Feld zum Formular-Datenmodell hinzugefügt
  - Außendienst und Lager bleiben unverändert (Frage wird übersprungen)

### Version 3.8 (Januar 2025)
- ✉️ **HTML-E-Mails mit Klassifizierung**
  - E-Mails als professionell gestaltetes HTML (statt Plain-Text)
  - Klassifizierung mit Emojis in Betreffzeile: 🌟 PERFEKT (50+ Punkte), ✅ GEEIGNET (35+ Punkte), 💡 INTERESSANT (20+ Punkte), ⚠️ UNPASSEND (<20 Punkte)
  - Farbcodierte Badges und Score-Boxen im E-Mail-Layout
  - Gradient Header, strukturierte Sektionen, responsive Design
  - Content-Type: text/html; charset=UTF-8
  - **E-Mail Formatierung verbessert (28.01.2025)**:
    - Schriftgröße von 15px auf 16px erhöht für bessere Lesbarkeit
    - Größere Header (28px), Section-Titel (22px) und Buttons (18px)
    - Mehr Abstände: Section-Padding 30-35px, Info-Rows 16px, Motivation-Box 22px
    - Dickere Section-Borders (2px) für klarere visuelle Trennung
    - Zebra-Streifen in Tabellen (jede zweite Zeile grau hinterlegt)
    - Line-height auf 1.8 erhöht für luftigere Darstellung
- 🎨 **Favicon-Optimierung**
  - Doppelte Favicon-Deklaration für bessere Browser-Kompatibilität
  - PNG und SVG Fallback auf allen Seiten (index, aussendienst, innendienst, bewerben)
  - Favicon_Poeppel.svg wird korrekt geladen
- 🔧 **Lagermitarbeiter Quiz-Optimierung**
  - Frage 3 geändert von "Fitness" zu "Werkzeug & Handwerk"
  - Neue Antworten: "Ja, arbeite/arbeitete im Handwerk" (10 Punkte), "Ja, privat handwerklich aktiv" (7 Punkte), "Grundkenntnisse vorhanden" (3 Punkte)
  - Grund: Kleines Lager ohne schwere Pakete - handwerkliche Erfahrung wichtiger als körperliche Fitness

### Version 3.7 (Januar 2025)
- 🖼️ **Job-Kachel Bilder auf Index**
  - Banner-Bilder "Kachel Außendienst.png" und "Kachel Innendienst.png" eingefügt
  - Ersetzen die SVG-Icons in den Job-Cards
  - Volle Breite der Kacheln (calc(100% + 5rem))
  - 200px Höhe mit object-fit: cover
- 📊 **Stats-Animation Fix**
  - "1/2 Mio. Artikel" wird korrekt angezeigt (kein "12.0 Mio." mehr)
  - Schrägstrich-Erkennung im JavaScript verhindert Animation von Brüchen
- 📱 **Mobile Icon-Animation verbessert**
  - Neue "iconBounceRotate" Animation für "Unsere Werte" Sektion
  - Kombination aus Bounce-Effekt (Scale bis 1.25x) und Rotation (±10°)
  - Gestaffelte Animation mit Welleneffekt (0.3s delay zwischen Icons)
  - Deutlich lebendiger als vorherige Puls-Animation
- ✉️ **Mail-System korrigiert**
  - Absender: noreply@poeppel-wkz.com (behebt Server-Routing-Problem)
  - Empfänger: support@poeppel-wkz.de (unverändert)
  - UTF-8 Base64-Encoding für Betreff (Umlaute)
  - Optimierte Mail-Header für bessere Zustellbarkeit
  - test-mail.php für Debugging hinzugefügt
- 👥 **Testimonials & Über uns**
  - 4 Mitarbeiter-Testimonials mit echten Namen und Positionen
  - "Über R. Pöppel GmbH & Co. KG" Sektion mit Firmengeschichte
  - Zusätzlicher "Zu den Jobs" Button nach About-Sektion
- 🎨 **Favicon hinzugefügt**
  - Favicon_Poeppel.svg auf allen Seiten implementiert

### Version 3.6 (Januar 2025)
- 🎯 **Innendienst-Funnel komplett überarbeitet**
  - Frage 5: "Beratung im Haus" mit 4 spezifischen Antworten (10/7/4/0 Punkte)
  - Frage 6: Freitextfeld "Was motiviert Dich als Verkaufsberater bei uns zu arbeiten?" (ersetzt Radio-Buttons)
  - Frage 7: Automatisch übersprungen für Innendienst (Navigation-Skip-Logik)
  - Motivation-Feld in Schritt 9 ausgeblendet für Innendienst (bereits in Schritt 6 abgefragt)
  - Positionsspezifische Validierung und Datensammlung
- 👥 **Innendienst Testimonials mit echten Namen**
  - Sarah Birk (Verkaufsberaterin Innendienst): "Strukturierte Einarbeitung & hilfsbereit Kollegen"
  - Maximilian Straub (Zerspanung): "Familienfreundlichkeit"
  - Harald Hartl (Holzbau): "Vielseitigkeit & Abwechslung"
- 🏷️ **Benefits-Kategorie umbenannt**
  - "Work-Life-Balance" → "Arbeitszeit"
  - Punkt "Flexibilität nach Absprache" entfernt
- ⏰ **Erreichbarkeit-Auswahl hinzugefügt**
  - Neuer Schritt 8: Vormittags/Nachmittags/Abends/Jederzeit
  - Wird in E-Mail übermittelt für besseres Bewerbermanagement

### Version 3.5 (Januar 2025)
- 🎉 **PHP-Mail-Integration**
  - Automatischer E-Mail-Versand an support@poeppel-wkz.de
  - Vollständige Übermittlung aller Vorqualifizierungsantworten
  - Score-basierte Bewertung in E-Mail
- ✨ **Content-Updates**
  - **Index**: "Work-Life-Balance" → "Flexibilität - Gleitzeit"
  - **Außendienst Benefits**: Entfernt "Betriebliche Altersvorsorge" & "Flache Hierarchien"
  - **Außendienst Testimonials**: Komplett überarbeitet mit neuen Zitaten (Uwe Hettl 30+ Jahre, Michael Wrage 13+ Jahre, Alois Aschenbrenner 20 Jahre)
  - **Innendienst Benefits**: Ersetzt durch Edenred Gutscheinkarte, VWL, Jobrad, Gemeinschaftsraum
  - **Innendienst Anforderungen**: Hinzugefügt "Mitgestaltung des Verkaufsraumes"
  - **Vorqualifizierung**: Frage 2 präzisiert ("Wie viel aktive Kundenansprache?")
- 🔧 **Silberstreifen-Fix**
  - Ohne Transparenz als oberer Rand der Folge-Sektion
  - Metallisch glänzend mit inset box-shadow
  - Deutlich besser sichtbar
- 👤 **Ansprechpartner aktualisiert**
  - Name: Herr Andreas Bodenmiller
  - Position: IT-Leitung / Personalleitung
  - Telefon: 08331-9559-660
  - E-Mail: support@poeppel-wkz.de

### Version 3.0 (Januar 2025)
- 🎉 **Mobile Optimierungen**
  - Logo auf 30px verkleinert auf mobilen Geräten
  - `background-attachment: scroll` für iOS/Android
  - Kein Überlappen von Logo und Zurück-Button
- ✨ **Silber-Gradient Lines** auf allen roten Sektionen (CI-konform)
- ✨ **Scroll-to-Top Button** auf allen 4 Seiten
- ✨ **Intro-Sektion Aussendienst** mit kraftvollem Einstieg
- ✨ **Testimonials mit echten Namen**:
  - Uwe Hettl (20+ Jahre bei Pöppel)
  - Alois Aschenbrenner (ehemaliger Zimmermannsmeister)
  - Michael Wrage (Verkaufsleiter)
- ✨ **8-stufiger Bewerbungs-Funnel** mit Scoring (0-60 Punkte)
  - 7 Qualifikations-Fragen
  - Motivation-Feld (Pflicht)
  - Fragen-Feld (optional)
  - Score-basiertes Feedback
- 🔧 **Euro-Icon korrigiert** in Benefits-Sektion
- 🔧 **Zurück-Button** führt zu index.html#jobs
- 🎨 **Icon-Animationen** auf Mobile (Pulse-Effekt)
- 🎨 **Glassmorphism** auf Testimonials (backdrop-filter)

### Version 2.0 (Januar 2025)
- 🎉 **Vollständiger Relaunch**
- ✨ **Übersichtsseite** mit 2 offenen Stellen
- ✨ **Außendienst-Stellenanzeige** (Verkaufsberater)
- ✨ **Innendienst-Stellenanzeige** (Verkaufsberater)
- ✨ **4-stufiger Bewerbungs-Funnel** mit Progress-Bar
- 🎨 **Baufritz-Struktur** mit Pöppel CI-Farben
- 🖼️ **Assets integriert**: Logo und Headerbilder
- 📄 **Inhalte basierend** auf Karriere-Seite
- 💬 **Testimonials** von Mitarbeitern
- 📊 **Benefits-Grid** (4-spaltig)
- 📱 **Fully Responsive** mit Mobile-First Ansatz

### Version 1.0 (Januar 2025)
- 🎉 Initial Release
- ✨ Projekt-Setup und Grundstruktur

## 🔄 Backend-Integration

**Aktuelle Implementierung: PHP-Mail-System**

Die Bewerbungsformulare senden Daten via Fetch-API an `submit-application.php`:

```javascript
fetch('submit-application.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(formData)
})
```

**PHP-Backend Features:**
- ✅ E-Mail-Versand an support@poeppel-wkz.de
- ✅ Absender: noreply@poeppel-wkz.com (optimiert für Server-Routing)
- ✅ UTF-8 Base64-Encoding für deutschen Betreff
- ✅ Vollständige Datenübermittlung (Antworten, Score, Kontaktdaten)
- ✅ Input-Validierung & Sicherheit (XSS-Protection)
- ✅ Automatische Bewertung basierend auf Score
- ✅ Strukturierte Plain-Text E-Mail
- ✅ Test-Script (test-mail.php) für Debugging

**E-Mail-Inhalt:**
- Bewerberdaten (Name, E-Mail, Telefon, Stelle)
- Motivation & Fragen
- Alle 7 Vorqualifizierungsantworten
- Gesamtscore mit Bewertung (Perfekt/Gut/Interessant/Gering)
- Zeitstempel

**Server-Anforderungen:**
- PHP 7.0+ mit `mail()` Funktion
- SMTP-Server konfiguriert
- Schreibrechte für PHP (für Logs, falls implementiert)

**Alternative Lösungen:**
1. **Typeform** - Professionelle Forms mit DSGVO-Konformität
2. **Formspree** - Einfache Form-to-Email Integration
3. **EmailJS** - JavaScript E-Mail-Versand
4. **Node.js/Express** - Vollständiges Custom Backend

## 🎯 Nächste Schritte

- [ ] Backend-Integration für Bewerbungs-Formular
- [ ] Google Analytics / Matomo Integration
- [ ] A/B-Testing für CTA-Buttons
- [ ] Weitere Stellenanzeigen hinzufügen
- [ ] Video-Testimonials einbinden

## 📄 Lizenz

Copyright © 2025 R. Pöppel GmbH & Co. KG. Alle Rechte vorbehalten.

## 📞 Support & Kontakt

Bei Fragen zur Webseite oder den Stellenangeboten:

**R. Pöppel GmbH & Co. KG**
- 📍 Alpenstraße 45, Industriegebiet Süd, D-87700 Memmingen
- 📞 Tel: 08331 9559-0
- 📧 E-Mail: info@poeppel-wkz.de
- 🌐 Web: www.poeppel-wkz.de

**Ansprechpartner Bewerbungen:**
- Herr Andreas Bodenmiller
- IT-Leitung / Personalleitung
- 📞 08331-9559-660
- 📧 support@poeppel-wkz.de

---

**Entwickelt mit ❤️ für moderne Karrieremöglichkeiten**

🤖 *Diese Landingpage wurde mit Unterstützung von Claude Code erstellt*
