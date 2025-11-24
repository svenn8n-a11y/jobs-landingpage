# Pöppel Jobs Landingpage

Eine moderne, professionelle Landingpage für Jobangebote bei R. Pöppel GmbH & Co. KG - Werkzeugmaschinen und Intralogistik-Spezialist aus Memmingen.

![Version](https://img.shields.io/badge/version-2.0-blue)
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
- ✅ **Baufritz-inspiriert**: Struktur und Layout nach bewährtem Vorbild
- ✅ **Pöppel CI**: Angepasst an Corporate Identity (#be1823 Rot)
- ✅ **Fully Responsive**: Optimiert für Desktop, Tablet und Mobile
- ✅ **Smooth Scrolling**: Sanfte Navigation und Animationen
- ✅ **Hero-Bilder**: Professionelle Headerbilder mit Overlay

### Funktionalität
- ✅ **Übersichtsseite**: Alle offenen Stellen auf einen Blick
- ✅ **Detailseiten**: Ausführliche Stellenbeschreibungen
- ✅ **4-stufiger Bewerbungs-Funnel**: Progressives Formular mit Auto-Advance
- ✅ **7x CTA-Buttons**: Strategisch platziert für hohe Conversion
- ✅ **Testimonials**: Authentische Mitarbeiterzitate
- ✅ **Benefits-Grid**: 4-spaltig mit Icons
- ✅ **Unternehmenswerte**: Visualisiert mit Icons

### Technisch
- ✅ **Zero Dependencies**: Kein jQuery, keine Frameworks
- ✅ **SEO-optimiert**: Semantisches HTML5, Meta-Tags
- ✅ **Performance**: Lazy Loading, optimierte Assets
- ✅ **Accessibility**: WCAG-konform, keyboard-navigierbar

## 🌐 Seitenübersicht

### 1. Übersichtsseite ([index.html](index.html))

**Hero-Sektion:**
- Großflächiges Hintergrundbild (images/Headerbild_jobs.png)
- "Karriere bei Pöppel" + Tagline
- Firmenlogo im Header

**Job-Cards (2 Stellen):**
- 🚗 **Verkaufsberater Außendienst**: Mit Firmenwagen
- 📞 **Verkaufsberater Innendienst**: Geregelte Arbeitszeiten

**Weitere Sektionen:**
- Statistik-Banner: 100 Jahre, 50+ MA, 1000+ Kunden, 1925 gegründet
- Unternehmenswerte: 4 Säulen (Eigenverantwortung, Miteinander, Innovation, Nachhaltigkeit)
- Benefits-Grid: 6 Kategorien mit Icons

### 2. Außendienst-Stellenanzeige ([aussendienst.html](aussendienst.html))

**Stellenprofil:**
- Position: Verkaufsberater Außendienst (m/w/d)
- Standort: Memmingen
- Typ: Vollzeit mit Firmenwagen

**Inhalte:**
- **Benefits**: Vergütung & Ausstattung, Eigenverantwortung, Entwicklung, Team & Kultur
- **Testimonials**: 4 Zitate von Vertriebsmitarbeitern
- **Aufgaben**: Kundenbetreuung, Neukundenakquise, Beratung, Verkaufsabschluss
- **Anforderungen**: 8 Punkte inkl. Fahrerlaubnis
- **Firmenprofil**: Text + 4 Statistiken
- **Ansprechpartner**: Sven Nürnberger mit Kontaktdaten

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
- **Firmenprofil**: Text + 4 Statistiken
- **Ansprechpartner**: Sven Nürnberger mit Kontaktdaten

### 4. Bewerbungs-Funnel ([bewerben.html](bewerben.html))

**4-stufiger Prozess:**
1. **Qualifikation**: Fachkraft, Fachlagerist, Quereinsteiger, Berufseinsteiger
2. **Startdatum**: Sofort, 1-3 Monate, 3-6 Monate, Weiß noch nicht
3. **Erfahrung**: >5 Jahre, 2-5 Jahre, <2 Jahre, Keine
4. **Kontaktdaten**: Name, E-Mail, Telefon, Nachricht, DSGVO-Checkbox

**Features:**
- Progress-Bar mit visueller Anzeige
- Auto-Advance bei Radio-Auswahl
- "Glückwunsch"-Meldung vor Kontaktformular
- Echtzeit-Validierung
- Success-Seite mit Sicherheitshinweis 🔒

### 5. Intralogistik-Fachkraft ([intralogistik-fachkraft.html](intralogistik-fachkraft.html))

Ursprüngliche Stellenanzeige für Fachkraft Intralogistik (m/w/d) – als Vorlage für weitere Stellenanzeigen verfügbar.

## 📁 Dateistruktur

```
jobs-landingpage/
│
├── index.html                          # Übersichtsseite mit allen Stellen
├── aussendienst.html                   # Stellenanzeige Verkaufsberater Außendienst
├── innendienst.html                    # Stellenanzeige Verkaufsberater Innendienst
├── bewerben.html                       # 4-stufiger Bewerbungs-Funnel
├── intralogistik-fachkraft.html        # Stellenanzeige Intralogistik (Vorlage)
│
├── images/                             # Bilder und Assets
│   ├── Logo_poeppel.png                # Firmenlogo (38KB)
│   └── Headerbild_jobs.png             # Hero-Hintergrundbild (1MB, in .gitignore)
│
├── README.md                           # Haupt-Dokumentation (diese Datei)
├── .gitignore                          # Große Binärdateien ausgeschlossen
└── Jobs Landingpage.code-workspace     # VS Code Workspace-Datei
```

**Hinweis**: Das Headerbild (1MB) ist zu groß für GitHub und daher in `.gitignore` ausgeschlossen. Es muss separat hochgeladen werden.

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

# WICHTIG: Headerbild manuell hinzufügen
# Kopiere Headerbild_jobs.png nach images/

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
- **Vanilla JavaScript**:
  - ES6+ Features
  - DOM-Manipulation
  - Event-Handling
  - Form-Validierung
  - Smooth Scrolling

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
}

@media (max-width: 480px) {
    /* Small Mobile */
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
| iOS Safari | 14+ | ✅ Vollständig |
| Chrome Android | 90+ | ✅ Vollständig |

**Hinweis**: IE11 wird nicht unterstützt (End of Life)

## 📦 Deployment

### GitHub Pages

1. In Repository Settings → Pages gehen
2. Branch "main" auswählen
3. Save klicken
4. **WICHTIG**: Headerbild manuell hochladen (images/Headerbild_jobs.png)
5. URL: `https://svenn8n-a11y.github.io/jobs-landingpage/`

### Netlify

1. Netlify Account erstellen
2. "New site from Git" wählen
3. Repository verbinden
4. Deploy settings:
   - Build command: (leer)
   - Publish directory: `/`
5. **WICHTIG**: Headerbild über Netlify Dashboard hochladen
6. Deploy klicken

### Traditionelles Hosting

Per FTP alle Dateien auf Webserver hochladen:
- index.html (Root)
- aussendienst.html
- innendienst.html
- bewerben.html
- images/ (inkl. Headerbild!)
- Alle anderen Assets

## 📝 Changelog

### Version 2.0 (Januar 2025)
- 🎉 **Vollständiger Relaunch**
- ✨ **Übersichtsseite** mit 2 offenen Stellen
- ✨ **Außendienst-Stellenanzeige** (Verkaufsberater)
- ✨ **Innendienst-Stellenanzeige** (Verkaufsberater)
- ✨ **4-stufiger Bewerbungs-Funnel** mit Progress-Bar
- 🎨 **Baufritz-Struktur** mit Pöppel CI-Farben
- 🖼️ **Assets integriert**: Logo und Headerbild
- 📄 **Inhalte basierend** auf Karriere-Seite von poeppel-wkz.de
- 💬 **Testimonials** von Mitarbeitern
- 📊 **Benefits-Grid** (4-spaltig)
- 🎯 **7x CTA-Buttons** pro Stellenanzeige
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
- Herr Sven Nürnberger
- Geschäftsführung / Personalleitung

---

**Entwickelt mit ❤️ für moderne Karrieremöglichkeiten**

🤖 *Diese Landingpage wurde mit Unterstützung von Claude Code erstellt*
