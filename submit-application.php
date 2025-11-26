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

// E-Mail-Betreff
$subject = 'Neue Bewerbung: ' . $stellenbezeichnung . ' - ' . $name;

// E-Mail-Nachricht zusammenstellen
$message = "
╔═══════════════════════════════════════════════════════════════╗
║           NEUE BEWERBUNG - JOBS LANDINGPAGE                   ║
╚═══════════════════════════════════════════════════════════════╝

┌─────────────────────────────────────────────────────────────┐
│ BEWERBERDATEN                                               │
└─────────────────────────────────────────────────────────────┘
  Name:              $name
  E-Mail:            $email
  Telefon:           $phone
  Stelle:            $stellenbezeichnung
  Erreichbarkeit:    $availability

┌─────────────────────────────────────────────────────────────┐
│ MOTIVATION                                                  │
└─────────────────────────────────────────────────────────────┘
$motivation

┌─────────────────────────────────────────────────────────────┐
│ FRAGEN AN UNS                                               │
└─────────────────────────────────────────────────────────────┘
$questions

┌─────────────────────────────────────────────────────────────┐
│ VORQUALIFIZIERUNG                                           │
└─────────────────────────────────────────────────────────────┘
  Gesamtpunktzahl: $score von 70 Punkten

  Frage                     │ Antwort
  ──────────────────────────┼─────────────────────────────────
  1. Technische Erfahrung   │ $technical
  2. Verkaufsfreude         │ $sales
  3. Reisebereitschaft      │ $travel
  4. Selbstorganisation     │ $organization
  5. Digitale Tools         │ $digital
  6. Verkaufsansatz         │ $approach
  7. Mini-Praxisfall        │ $case

┌─────────────────────────────────────────────────────────────┐
│ BEWERTUNG                                                   │
└─────────────────────────────────────────────────────────────┘
";

if ($score >= 50) {
    $message .= "⭐ PERFEKT! Sehr gute Übereinstimmung mit den Anforderungen.";
} elseif ($score >= 35) {
    $message .= "✓ GUT! Gute Übereinstimmung mit den Anforderungen.";
} elseif ($score >= 20) {
    $message .= "○ INTERESSANT! Mittlere Übereinstimmung, Potenzial vorhanden.";
} else {
    $message .= "- Aktuell geringe Übereinstimmung mit den Anforderungen.";
}

$message .= "

═══════════════════════════════════════════════════════════════
Gesendet: " . date('d.m.Y H:i:s') . "
═══════════════════════════════════════════════════════════════
";

// E-Mail-Header
$headers = "From: Pöppel Jobs <noreply@poeppel-wkz.de>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// E-Mail senden
$mailSent = mail($to, $subject, $message, $headers);

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
