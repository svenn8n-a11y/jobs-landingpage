# Pöppel Jobs Landingpage

Eine moderne, professionelle Landingpage für Jobangebote bei R. Pöppel GmbH & Co. KG - Werkzeugmaschinen und Intralogistik-Spezialist aus Memmingen.

![Version](https://img.shields.io/badge/version-3.0-blue)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black)

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
- ✅ **Struktur und Layout nach bewährtem Vorbild
- ✅ **Pöppel CI**: Angepasst an Corporate Identity (#be1823 Rot)
- ✅ **Fully Responsive**: Optimiert für Desktop, Tablet und Mobile
- ✅ **Smooth Scrolling**: Sanfte Navigation und Animationen
- ✅ **Hero-Bilder**: Professionelle Headerbilder mit Overlay
- ✅ **Scroll-to-Top Button**: Sticky Button auf allen Seiten
- ✅ **Silver Gradient Lines**: CI-konforme Silberstreifen auf roten Sektionen
- ✅ **Mobile Optimiert**: Background-attachment und Logo-Größe angepasst

### Funktionalität
- ✅ **Übersichtsseite**: Alle offenen Stellen auf einen Blick
- ✅ **Detailseiten**: Ausführliche Stellenbeschreibungen
- ✅ **8-stufiger Bewerbungs-Funnel**: Progressives Formular mit Auto-Advance und Scoring
- ✅ **Multiple CTA-Buttons**: Strategisch platziert für hohe Conversion
- ✅ **Testimonials mit echten Namen**: Authentische Mitarbeiterzitate (Uwe Hettl, Michael Wrage, Alois Aschenbrenner)
- ✅ **Benefits-Grid**: 4-spaltig mit Icons
- ✅ **Unternehmenswerte**: Visualisiert mit Icons und Mobile-Animationen
- ✅ **Intro-Sektionen**: Kraftvolle Einleitungstexte ("Dein Herz schlägt für den Holzbau...")

### Technisch
- ✅ **Zero Dependencies**: Kein jQuery, keine Frameworks
- ✅ **SEO-optimiert**: Semantisches HTML5, Meta-Tags
- ✅ **Performance**: Lazy Loading, optimierte Assets
- ✅ **Accessibility**: WCAG-konform, keyboard-navigierbar
- ✅ **Intersection Observer**: Scroll-triggered Animationen
- ✅ **Glassmorphism**: Moderne UI-Effekte mit backdrop-filter

## 🌐 Seitenübersicht

### 1. Übersichtsseite ([index.html](index.html))

**Hero-Sektion:**
- Großflächiges Hintergrundbild (images/headerbild_index.jpg)
- "Karriere bei Pöppel" + Tagline
- Firmenlogo im Header
- Silberstreifen am unteren Rand

**Job-Cards (2 Stellen):**
- 🚗 **Verkaufsberater Außendienst**: Mit Firmenwagen
- 📞 **Verkaufsberater Innendienst**: Geregelte Arbeitszeiten

**Weitere Sektionen:**
- Statistik-Banner: 100 Jahre, 50+ MA, 1000+ Kunden, 1925 gegründet (mit Silberstreifen)
- Unternehmenswerte: 4 Säulen (Eigenverantwortung, Miteinander, Innovation, Nachhaltigkeit)
  - Mobile: Pulse-Animation auf Icons
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
- **Benefits**: 4 Kategorien
  - Vergütung & Ausstattung (mit korrektem Euro-Icon)
  - Eigenverantwortung
  - Entwicklung
  - Team & Kultur
- **Testimonials** (rote Sektion mit Glassmorphism):
  - Uwe Hettl, Verkaufsberater Außendienst (seit über 20 Jahren bei Pöppel)
  - Michael Wrage, Verkaufsleiter
  - Alois Aschenbrenner, Verkaufsberater Außendienst (war vorher selbst Zimmermannsmeister)
- **Aufgaben**: Kundenbetreuung, Neukundenakquise, Beratung, Verkaufsabschluss
- **Anforderungen**: 8 Punkte inkl. Fahrerlaubnis
- **Ansprechpartner**: Andreas Bodenmiller (Geschäftsführung/Personalleitung)

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
- **Benefits**: Vergütung, Arbeitsklima, Arbeitsplatz, Work-Life-Balance
- **Testimonials**: 4 Zitate von Innendienst-Mitarbeitern
- **Aufgaben**: Kundenberatung, Auftragsabwicklung, Betreuung, Lösungsfindung
- **Anforderungen**: 8 Punkte inkl. Kommunikationsstärke
- **Ansprechpartner**: Andreas Bodenmiller

**Mobile Optimierungen:**
- Logo auf 30px verkleinert
- Background-attachment: scroll

### 4. Bewerbungs-Funnel ([bewerben.html](bewerben.html))

**8-stufiger Prozess mit Scoring:**
1. **Technische Erfahrung**: Handwerk, Technik, Baubranche (0-10 Punkte)
2. **Verkaufsfreude**: Menschen überzeugen (0-10 Punkte)
3. **Reisebereitschaft**: Täglich zu Kunden fahren (0-10 Punkte)
4. **Selbstorganisation**: Arbeitstag selbst organisieren (0-10 Punkte)
5. **Digitale Tools**: Offenheit für CRM, Apps (0-10 Punkte)
6. **Verkaufsansatz**: Produkt erklären vs. Problem lösen (5-10 Punkte)
7. **Mini-Praxisfall**: Kundenreaktion (0-10 Punkte)
8. **Kontaktdaten**: Name, E-Mail, Telefon, Motivation, Fragen (optional), DSGVO

**Scoring-System:**
- 50-60 Punkte: "Perfekt! Du passt hervorragend zu uns!"
- 35-49 Punkte: "Guter Fit! Lass uns sprechen."
- 20-34 Punkte: "Interessant! Wir melden uns bei dir."
- 0-19 Punkte: "Danke für dein Interesse!"

**Features:**
- Progress-Bar mit 8 Schritten
- Auto-Advance bei Radio-Auswahl
- Score-basierte Feedback-Nachricht vor Kontaktformular
- Echtzeit-Validierung
- Motivation-Textfeld (Pflicht): "Warum möchtest Du für uns arbeiten?"
- Fragen-Textfeld (optional, grauer Hintergrund): "Hast Du Fragen an uns?"
- Success-Seite mit Sicherheitshinweis
- Scroll-to-Top Button

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
├── intralogistik-fachkraft.html        # Stellenanzeige Intralogistik (Vorlage)
│
├── images/                             # Bilder und Assets
│   ├── Logo_poeppel.png                # Firmenlogo
│   ├── headerbild_index.jpg            # Hero-Hintergrundbild Index
│   └── Headerbild_jobs.png             # Hero-Hintergrundbild Jobs
│
├── README.md                           # Haupt-Dokumentation (diese Datei)
├── .gitignore                          # Große Binärdateien ausgeschlossen
└── Jobs Landingpage.code-workspace     # VS Code Workspace-Datei
```

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

```css
background: linear-gradient(90deg,
    transparent 0%,
    #c0c0c0 15%,
    #e8e8e8 30%,
    #ffffff 50%,
    #e8e8e8 70%,
    #c0c0c0 85%,
    transparent 100%);
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

### Traditionelles Hosting

Per FTP alle Dateien auf Webserver hochladen:
- index.html (Root)
- aussendienst.html
- innendienst.html
- bewerben.html
- images/ (alle Bilder)
- Alle anderen Assets

## 📝 Changelog

### Version 3.0 (Januar 2025) - Aktuell
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

## 🔄 Backend-Integration (Optional)

Aktuell: Client-seitige Validierung & Console-Log

**Empfohlene Lösungen für E-Mail-Versand:**

1. **Typeform** (Empfohlen für schnelle Integration)
   - Professionelles Design
   - DSGVO-konform
   - E-Mail-Benachrichtigungen
   - Einfach zu integrieren

2. **Formspree**
   ```html
   <form action="https://formspree.io/f/YOUR-ID" method="POST">
   ```

3. **EmailJS**
   ```javascript
   emailjs.send("service_id", "template_id", formData);
   ```

4. **Eigenes Backend** (PHP, Node.js, Python)

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
- Geschäftsführung / Personalleitung
- 📞 08331-9559-660
- 📧 job@poeppel-wkz.de

---

**Entwickelt mit ❤️ für moderne Karrieremöglichkeiten**

🤖 *Diese Landingpage wurde mit Unterstützung von Claude Code erstellt*
