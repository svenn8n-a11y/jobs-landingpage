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
$stellenbezeichnung = ($stelle === 'aussendienst') ? 'Verkaufsberater Außendienst' : 'Verkaufsberater Innendienst';

// E-Mail-Empfänger
$to = 'support@poeppel-wkz.de';

// Klassifizierung für Betreff bestimmen
$classification = '';
$classificationColor = '';
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

// E-Mail-Betreff mit Klassifizierung und Encoding
$subject = '=?UTF-8?B?' . base64_encode($classification . ' | Bewerbung: ' . $stellenbezeichnung . ' - ' . $name) . '?=';

// HTML E-Mail-Nachricht zusammenstellen
$message = "
<!DOCTYPE html>
<html lang=\"de\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 20px; background: #f4f4f4; }
        .container { max-width: 700px; margin: 0 auto; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #be1823, #32373c); color: white; padding: 30px; text-align: center; }
        .header h1 { margin: 0; font-size: 24px; font-weight: 300; }
        .classification { display: inline-block; background: $classificationColor; color: white; padding: 8px 20px; border-radius: 20px; font-size: 16px; font-weight: 600; margin-top: 15px; }
        .section { padding: 25px 30px; border-bottom: 1px solid #e0e0e0; }
        .section:last-child { border-bottom: none; }
        .section-title { color: #be1823; font-size: 18px; font-weight: 600; margin-bottom: 15px; padding-bottom: 8px; border-bottom: 2px solid #be1823; }
        .info-row { display: flex; margin-bottom: 10px; }
        .info-label { font-weight: 600; min-width: 150px; color: #666; }
        .info-value { color: #333; }
        .motivation { background: #f9f9f9; padding: 15px; border-left: 4px solid #be1823; margin: 10px 0; font-style: italic; }
        table { width: 100%; border-collapse: collapse; margin: 10px 0; }
        th { background: #be1823; color: white; padding: 12px; text-align: left; font-weight: 600; }
        td { padding: 10px 12px; border-bottom: 1px solid #e0e0e0; }
        tr:last-child td { border-bottom: none; }
        .score-box { background: $classificationColor; color: white; padding: 20px; border-radius: 8px; text-align: center; font-size: 20px; font-weight: 600; margin: 15px 0; }
        .footer { background: #32373c; color: #999; padding: 20px; text-align: center; font-size: 12px; }
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
            <div class=\"score-box\">$score von 70 Punkten</div>
            <table>
                <tr>
                    <th>Frage</th>
                    <th>Antwort</th>
                </tr>
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
                </tr>
            </table>
        </div>

        <div class=\"footer\">
            Gesendet: " . date('d.m.Y H:i:s') . " | R. Pöppel GmbH & Co. KG
        </div>
    </div>
</body>
</html>
";

// E-Mail-Header - optimiert für Serverkompatibilität
$headers = "From: noreply@poeppel-wkz.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Return-Path: noreply@poeppel-wkz.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "MIME-Version: 1.0\r\n";

// E-Mail senden mit zusätzlichen Parametern
$mailSent = mail($to, $subject, $message, $headers, '-f noreply@poeppel-wkz.com');

if ($mailSent) {
    echo json_encode([
        'success' => true,
        'message' => 'Bewerbung erfolgreich gesendet'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Fehler beim Senden der E-Mail'
    ]);
}
?>
