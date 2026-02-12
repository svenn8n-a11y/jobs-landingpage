<?php
// Fehlerbehandlung und Sicherheit
error_reporting(0);
ini_set('display_errors', 0);

// CORS Headers für lokale Entwicklung (kann auf Server entfernt werden)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

// Nur POST-Anfragen erlauben
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Nur POST-Anfragen erlaubt']);
    exit;
}

// JSON-Daten empfangen
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

if (!$data) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Ungültige Daten']);
    exit;
}

// Pflichtfelder prüfen
$requiredFields = ['name', 'email', 'phone', 'motivation', 'stelle'];
foreach ($requiredFields as $field) {
    if (empty($data[$field])) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Pflichtfelder fehlen']);
        exit;
    }
}

// E-Mail-Adresse validieren
if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Ungültige E-Mail-Adresse']);
    exit;
}

// Daten bereinigen
$name = htmlspecialchars(strip_tags($data['name']));
$email = htmlspecialchars(strip_tags($data['email']));
$phone = htmlspecialchars(strip_tags($data['phone']));
$motivation = htmlspecialchars(strip_tags($data['motivation']));
$questions = isset($data['questions']) ? htmlspecialchars(strip_tags($data['questions'])) : 'Keine Fragen';
$stelle = htmlspecialchars(strip_tags($data['stelle']));
$score = intval($data['score']);

// Antworten auf die Vorqualifizierungsfragen
$technical = isset($data['technical']) ? htmlspecialchars(strip_tags($data['technical'])) : '';
$sales = isset($data['sales']) ? htmlspecialchars(strip_tags($data['sales'])) : '';
$travel = isset($data['travel']) ? htmlspecialchars(strip_tags($data['travel'])) : '';
$organization = isset($data['organization']) ? htmlspecialchars(strip_tags($data['organization'])) : '';
$digital = isset($data['digital']) ? htmlspecialchars(strip_tags($data['digital'])) : '';
$approach = isset($data['approach']) ? htmlspecialchars(strip_tags($data['approach'])) : '';
$case = isset($data['case']) ? htmlspecialchars(strip_tags($data['case'])) : '';
$availability = isset($data['availability']) ? htmlspecialchars(strip_tags($data['availability'])) : '';

// Stellenbezeichnung
if ($stelle === 'aussendienst') {
    $stellenbezeichnung = 'Verkaufsberater Außendienst';
} elseif ($stelle === 'lager') {
    $stellenbezeichnung = 'Lagermitarbeiter';
} else {
    $stellenbezeichnung = 'Verkaufsberater Innendienst';
}

// E-Mail-Empfänger
$to = 'support@poeppel-wkz.de';

// Klassifizierung für Betreff bestimmen (unterschiedliche Schwellenwerte für Lager vs. Verkauf)
$classification = '';
$classificationColor = '';

if ($stelle === 'lager') {
    // Lager: max 50 Punkte
    if ($score >= 36) {
        $classification = '🌟 PERFEKT';
        $classificationColor = '#27ae60';
    } elseif ($score >= 25) {
        $classification = '✅ GEEIGNET';
        $classificationColor = '#2ecc71';
    } elseif ($score >= 15) {
        $classification = '💡 INTERESSANT';
        $classificationColor = '#f39c12';
    } else {
        $classification = '⚠️ UNPASSEND';
        $classificationColor = '#e74c3c';
    }
} else {
    // Verkaufspositionen: max 70 Punkte
    if ($score >= 50) {
        $classification = '🌟 PERFEKT';
        $classificationColor = '#27ae60';
    } elseif ($score >= 35) {
        $classification = '✅ GEEIGNET';
        $classificationColor = '#2ecc71';
    } elseif ($score >= 20) {
        $classification = '💡 INTERESSANT';
        $classificationColor = '#f39c12';
    } else {
        $classification = '⚠️ UNPASSEND';
        $classificationColor = '#e74c3c';
    }
}

// E-Mail-Betreff mit Klassifizierung und Encoding
$subject = '=?UTF-8?B?' . base64_encode($classification . ' | Bewerbung: ' . $stellenbezeichnung . ' - ' . $name) . '?=';

// Maximale Punktzahl abhängig von der Stelle
$maxScore = ($stelle === 'lager') ? 50 : 70;

// Fragetabelle abhängig von der Stelle
if ($stelle === 'lager') {
    // Für Lager werden die Input-Namen wiederverwendet, aber mit anderen Bedeutungen
    // technical = Lager-Erfahrung
    // sales = Gabelstapler-Führerschein
    // travel = Fitness
    // organization = Selbstständigkeit & Verantwortung
    // digital = Verfügbarkeit (wiederverwendet, da Frage 5 unterschiedlich ist)
    $questionTable = "
                <tr>
                    <td>1. Lager-Erfahrung</td>
                    <td>$technical</td>
                </tr>
                <tr>
                    <td>2. Gabelstapler-Führerschein</td>
                    <td>$sales</td>
                </tr>
                <tr>
                    <td>3. Werkzeug & Handwerk</td>
                    <td>$travel</td>
                </tr>
                <tr>
                    <td>4. Selbstständigkeit & Verantwortung</td>
                    <td>$organization</td>
                </tr>
                <tr>
                    <td>5. Verfügbarkeit</td>
                    <td>$digital</td>
                </tr>";
} else {
    $questionTable = "
                <tr>
                    <td>1. Technische Erfahrung</td>
                    <td>$technical</td>
                </tr>
                <tr>
                    <td>2. Verkaufsfreude</td>
                    <td>$sales</td>
                </tr>
                <tr>
                    <td>3. Reisebereitschaft</td>
                    <td>$travel</td>
                </tr>
                <tr>
                    <td>4. Selbstorganisation</td>
                    <td>$organization</td>
                </tr>
                <tr>
                    <td>5. Digitale Tools</td>
                    <td>$digital</td>
                </tr>
                <tr>
                    <td>6. Verkaufsansatz</td>
                    <td>$approach</td>
                </tr>
                <tr>
                    <td>7. Mini-Praxisfall</td>
                    <td>$case</td>
                </tr>";
}

// HTML E-Mail-Nachricht zusammenstellen
$message = "
<!DOCTYPE html>
<html lang=\"de\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; line-height: 1.8; color: #333; margin: 0; padding: 20px; background: #f4f4f4; font-size: 16px; }
        .container { max-width: 700px; margin: 0 auto; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #be1823, #32373c); color: white; padding: 35px 30px; text-align: center; }
        .header h1 { margin: 0 0 5px 0; font-size: 28px; font-weight: 600; letter-spacing: 0.5px; }
        .classification { display: inline-block; background: $classificationColor; color: white; padding: 12px 26px; border-radius: 25px; font-size: 18px; font-weight: 700; margin-top: 18px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
        .section { padding: 30px 35px; border-bottom: 2px solid #f0f0f0; background: #fff; }
        .section:last-child { border-bottom: none; }
        .section-title { color: #be1823; font-size: 22px; font-weight: 700; margin: 0 0 20px 0; padding-bottom: 12px; border-bottom: 3px solid #be1823; letter-spacing: 0.3px; }
        .info-row { display: flex; margin-bottom: 16px; line-height: 1.7; }
        .info-label { font-weight: 600; min-width: 160px; color: #666; font-size: 16px; }
        .info-value { color: #333; font-size: 16px; }
        .info-value strong { color: #be1823; }
        .motivation { background: #f9f9f9; padding: 22px; border-left: 5px solid #be1823; margin: 15px 0; font-style: italic; line-height: 1.8; border-radius: 4px; font-size: 16px; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0 10px 0; }
        th { background: #be1823; color: white; padding: 16px 18px; text-align: left; font-weight: 600; font-size: 16px; }
        td { padding: 16px 18px; border-bottom: 1px solid #e8e8e8; font-size: 16px; line-height: 1.7; }
        tr:last-child td { border-bottom: none; }
        tr:nth-child(even) { background: #fafafa; }
        .score-box { background: $classificationColor; color: white; padding: 28px; border-radius: 10px; text-align: center; font-size: 24px; font-weight: 700; margin: 20px 0 25px 0; box-shadow: 0 3px 10px rgba(0,0,0,0.15); }
        .footer { background: #32373c; color: #aaa; padding: 25px; text-align: center; font-size: 14px; line-height: 1.5; }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>📋 NEUE BEWERBUNG</h1>
            <div class=\"classification\">$classification</div>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">👤 Bewerberdaten</div>
            <div class=\"info-row\">
                <div class=\"info-label\">Name:</div>
                <div class=\"info-value\"><strong>$name</strong></div>
            </div>
            <div class=\"info-row\">
                <div class=\"info-label\">E-Mail:</div>
                <div class=\"info-value\"><a href=\"mailto:$email\">$email</a></div>
            </div>
            <div class=\"info-row\">
                <div class=\"info-label\">Telefon:</div>
                <div class=\"info-value\"><a href=\"tel:$phone\">$phone</a></div>
            </div>
            <div class=\"info-row\">
                <div class=\"info-label\">Stelle:</div>
                <div class=\"info-value\"><strong>$stellenbezeichnung</strong></div>
            </div>
            <div class=\"info-row\">
                <div class=\"info-label\">Erreichbarkeit:</div>
                <div class=\"info-value\">$availability</div>
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">💬 Motivation</div>
            <div class=\"motivation\">$motivation</div>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">❓ Fragen an uns</div>
            <p style=\"margin: 10px 0;\">$questions</p>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">📊 Vorqualifizierung</div>
            <div class=\"score-box\">$score von $maxScore Punkten</div>
            <table>
                <tr>
                    <th>Frage</th>
                    <th>Antwort</th>
                </tr>
                $questionTable
            </table>
        </div>

        <div class=\"footer\">
            Gesendet: " . date('d.m.Y H:i:s') . " | R. Pöppel GmbH & Co. KG
        </div>
    </div>
</body>
</html>
";

// E-Mail-Header - optimiert für Serverkompatibilität (kein SMTPUTF8)
$headers = "From: noreply@poeppel-wkz.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Return-Path: noreply@poeppel-wkz.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: quoted-printable\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "MIME-Version: 1.0\r\n";

// Message für quoted-printable kodieren
$message = quoted_printable_encode($message);

// E-Mail senden mit zusätzlichen Parametern
$mailSent = mail($to, $subject, $message, $headers, '-f noreply@poeppel-wkz.com');

// Bestätigungs-E-Mail an den Bewerber
$confirmationSent = false;
if ($mailSent) {
    // Betreff für Bestätigungs-E-Mail
    $confirmationSubject = '=?UTF-8?B?' . base64_encode('✅ Ihre Bewerbung bei R. Pöppel - Eingangsbestätigung') . '?=';

    // Aktuelle Zeit formatieren
    $currentDateTime = date('d.m.Y') . ' um ' . date('H:i') . ' Uhr';

    // Bestätigungs-E-Mail HTML
    $confirmationMessage = "
<!DOCTYPE html>
<html lang=\"de\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; line-height: 1.8; color: #333; margin: 0; padding: 0; background: #f4f4f4; font-size: 16px; }
        .container { max-width: 700px; margin: 0 auto; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.15); }
        .header { background: linear-gradient(135deg, #be1823, #32373c); color: white; padding: 40px 30px; text-align: center; }
        .header h1 { margin: 0 0 10px 0; font-size: 32px; font-weight: 600; letter-spacing: 0.5px; }
        .header p { margin: 0; font-size: 18px; opacity: 0.95; }
        .section { padding: 35px 40px; border-bottom: 2px solid #f0f0f0; }
        .section:last-of-type { border-bottom: none; }
        .section-title { color: #be1823; font-size: 22px; font-weight: 700; margin: 0 0 20px 0; padding-bottom: 12px; border-bottom: 3px solid #be1823; }
        .greeting { font-size: 18px; margin-bottom: 20px; line-height: 1.8; }
        .highlight-box { background: #f9f9f9; border-left: 5px solid #be1823; padding: 20px 25px; margin: 20px 0; border-radius: 4px; }
        .highlight-box h3 { margin: 0 0 10px 0; color: #be1823; font-size: 18px; }
        .highlight-box p { margin: 5px 0; font-size: 16px; }
        .info-row { display: flex; margin-bottom: 12px; line-height: 1.8; }
        .info-label { font-weight: 600; min-width: 180px; color: #666; }
        .info-value { color: #333; }
        .steps { margin: 20px 0; }
        .step { margin-bottom: 20px; }
        .step-number { background: #be1823; color: white; width: 35px; height: 35px; border-radius: 50%; font-weight: 700; font-size: 18px; text-align: center; line-height: 35px; }
        .step-content h4 { margin: 0 0 5px 0; font-size: 17px; color: #333; }
        .step-content p { margin: 0; color: #666; font-size: 15px; }
        .contact-box { background: #f9f9f9; padding: 25px; border-radius: 8px; margin: 20px 0; }
        .contact-person { font-weight: 600; font-size: 18px; color: #be1823; margin-bottom: 15px; }
        .contact-details { display: flex; flex-direction: column; gap: 10px; }
        .contact-item { display: flex; align-items: center; gap: 10px; }
        .contact-item svg { width: 20px; height: 20px; color: #be1823; flex-shrink: 0; }
        .contact-item a { color: #be1823; text-decoration: none; font-weight: 500; }
        .contact-item a:hover { text-decoration: underline; }
        .footer { background: #32373c; color: #aaa; padding: 30px; text-align: center; font-size: 14px; line-height: 1.8; }
        .footer p { margin: 5px 0; }
        .footer-logo { font-size: 18px; font-weight: 600; color: #fff; margin-bottom: 15px; }
        .cta-button { display: inline-block; background: #be1823; color: white; padding: 14px 30px; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 16px; margin: 20px 0; }
        @media (max-width: 600px) {
            .section { padding: 25px 20px; }
            .info-row { flex-direction: column; }
            .info-label { min-width: auto; margin-bottom: 5px; }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>✅ Bewerbung eingegangen!</h1>
            <p>Vielen Dank für Ihr Interesse an R. Pöppel</p>
        </div>

        <div class=\"section\">
            <p class=\"greeting\">
                <strong>Sehr geehrte/r $name,</strong>
            </p>
            <p>
                vielen Dank für Ihre Bewerbung als <strong>$stellenbezeichnung</strong> bei der R. Pöppel GmbH & Co. KG.
                Wir haben Ihre Unterlagen erfolgreich erhalten und freuen uns über Ihr Interesse an unserem Unternehmen!
            </p>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">📋 Ihre Bewerbungsdaten</div>
            <div class=\"highlight-box\">
                <h3>Zusammenfassung</h3>
                <div class=\"info-row\">
                    <div class=\"info-label\">Name:</div>
                    <div class=\"info-value\">$name</div>
                </div>
                <div class=\"info-row\">
                    <div class=\"info-label\">Position:</div>
                    <div class=\"info-value\">$stellenbezeichnung</div>
                </div>
                <div class=\"info-row\">
                    <div class=\"info-label\">Eingegangen am:</div>
                    <div class=\"info-value\">$currentDateTime</div>
                </div>
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">🚀 Wie geht es weiter?</div>
            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\">
                <tr>
                    <td width=\"50\" valign=\"top\" style=\"padding-bottom: 20px;\">
                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"background: #be1823; color: white; width: 35px; height: 35px; border-radius: 50%; font-weight: 700; font-size: 18px; text-align: center; line-height: 35px;\">1</td></tr></table>
                    </td>
                    <td valign=\"top\" style=\"padding-bottom: 20px; padding-top: 5px;\">
                        <h4 style=\"margin: 0 0 5px 0; font-size: 17px; color: #333;\">Prüfung Ihrer Bewerbung</h4>
                        <p style=\"margin: 0; color: #666; font-size: 15px;\">Unser Team prüft Ihre Unterlagen sorgfältig und vergleicht Ihr Profil mit unseren Anforderungen.</p>
                    </td>
                </tr>
                <tr>
                    <td width=\"50\" valign=\"top\" style=\"padding-bottom: 20px;\">
                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"background: #be1823; color: white; width: 35px; height: 35px; border-radius: 50%; font-weight: 700; font-size: 18px; text-align: center; line-height: 35px;\">2</td></tr></table>
                    </td>
                    <td valign=\"top\" style=\"padding-bottom: 20px; padding-top: 5px;\">
                        <h4 style=\"margin: 0 0 5px 0; font-size: 17px; color: #333;\">Rückmeldung binnen 5 Werktagen</h4>
                        <p style=\"margin: 0; color: #666; font-size: 15px;\">Sie erhalten innerhalb der nächsten 5 Werktage eine Rückmeldung von uns per E-Mail oder Telefon.</p>
                    </td>
                </tr>
                <tr>
                    <td width=\"50\" valign=\"top\">
                        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"background: #be1823; color: white; width: 35px; height: 35px; border-radius: 50%; font-weight: 700; font-size: 18px; text-align: center; line-height: 35px;\">3</td></tr></table>
                    </td>
                    <td valign=\"top\" style=\"padding-top: 5px;\">
                        <h4 style=\"margin: 0 0 5px 0; font-size: 17px; color: #333;\">Persönliches Gespräch</h4>
                        <p style=\"margin: 0; color: #666; font-size: 15px;\">Bei Interesse laden wir Sie zu einem persönlichen Kennenlerngespräch in Memmingen ein.</p>
                    </td>
                </tr>
            </table>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">💼 Über R. Pöppel</div>
            <p>
                Seit 1925 steht R. Pöppel für Qualität und Innovation im Handel mit Werkzeugmaschinen, Werkzeugen
                und Betriebseinrichtungen. Als Familienunternehmen mit etwa 50 Mitarbeitern legen wir großen Wert
                auf ein kollegiales Miteinander und bieten spannende Entwicklungsmöglichkeiten.
            </p>
            <p style=\"margin-top: 15px;\">
                <strong>Was uns auszeichnet:</strong><br>
                ✓ Über 100 Jahre Erfahrung<br>
                ✓ Familiäres Arbeitsklima<br>
                ✓ Moderne Ausstattung<br>
                ✓ Vielfältige Benefits
            </p>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">📞 Fragen? Wir sind für Sie da!</div>
            <p>
                Falls Sie Fragen zu Ihrer Bewerbung haben oder weitere Informationen benötigen,
                können Sie sich jederzeit an uns wenden:
            </p>
            <div class=\"contact-box\">
                <div class=\"contact-person\">Herr Andreas Bodenmiller</div>
                <p style=\"margin: 0 0 15px 0; color: #666;\">IT-Leitung / Personalleitung</p>
                <div class=\"contact-details\">
                    <div class=\"contact-item\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"/>
                        </svg>
                        <a href=\"tel:+4983319559660\">08331-9559-660</a>
                    </div>
                    <div class=\"contact-item\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"/>
                            <polyline points=\"22,6 12,13 2,6\"/>
                        </svg>
                        <a href=\"mailto:support@poeppel-wkz.de\">support@poeppel-wkz.de</a>
                    </div>
                </div>
            </div>
            <p style=\"text-align: center; margin-top: 25px;\">
                <a href=\"https://www.poeppel-wkz.de\" class=\"cta-button\">Mehr über Pöppel erfahren</a>
            </p>
        </div>

        <div class=\"footer\">
            <div class=\"footer-logo\">R. Pöppel GmbH & Co. KG</div>
            <p>Alpenstraße 45 | 87700 Memmingen</p>
            <p>Tel: 08331-9559-0 | <a href=\"https://www.poeppel-wkz.de\" style=\"color: #be1823;\">www.poeppel-wkz.de</a></p>
            <p style=\"margin-top: 20px; font-size: 12px; opacity: 0.8;\">
                Diese E-Mail wurde automatisch generiert. Bitte antworten Sie nicht direkt auf diese E-Mail.<br>
                Bei Fragen kontaktieren Sie uns bitte über die oben angegebenen Kontaktdaten.
            </p>
        </div>
    </div>
</body>
</html>
";

    // Header für Bestätigungs-E-Mail - UTF-8 kodiert für Serverkompatibilität (kein SMTPUTF8)
    $confirmationHeaders = "From: =?UTF-8?B?" . base64_encode("R. Pöppel Bewerbungen") . "?= <noreply@poeppel-wkz.com>\r\n";
    $confirmationHeaders .= "Reply-To: support@poeppel-wkz.de\r\n";
    $confirmationHeaders .= "Return-Path: noreply@poeppel-wkz.com\r\n";
    $confirmationHeaders .= "Content-Type: text/html; charset=UTF-8\r\n";
    $confirmationHeaders .= "Content-Transfer-Encoding: quoted-printable\r\n";
    $confirmationHeaders .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $confirmationHeaders .= "MIME-Version: 1.0\r\n";

    // Confirmation Message für quoted-printable kodieren
    $confirmationMessage = quoted_printable_encode($confirmationMessage);

    // Bestätigungs-E-Mail an Bewerber senden
    $confirmationSent = mail($email, $confirmationSubject, $confirmationMessage, $confirmationHeaders, '-f noreply@poeppel-wkz.com');
}

if ($mailSent) {
    echo json_encode([
        'success' => true,
        'message' => 'Bewerbung erfolgreich gesendet',
        'confirmation_sent' => $confirmationSent
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Fehler beim Senden der E-Mail'
    ]);
}
?>
