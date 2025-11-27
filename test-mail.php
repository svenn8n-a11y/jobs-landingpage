<?php
/**
 * Test-Script für E-Mail-Funktionalität
 * Aufruf: test-mail.php?test=1
 */

// Fehlerausgabe aktivieren für Debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: text/html; charset=UTF-8');

echo "<h1>E-Mail Test für Pöppel Jobs</h1>";
echo "<p>Server: " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<hr>";

if (isset($_GET['test'])) {
    $to = 'support@poeppel-wkz.de';
    $subject = '=?UTF-8?B?' . base64_encode('Test-Mail von Jobs Landingpage') . '?=';
    $message = "Dies ist eine Test-E-Mail vom Jobs-Formular.\n\n";
    $message .= "Gesendet am: " . date('d.m.Y H:i:s') . "\n";
    $message .= "Server: " . $_SERVER['SERVER_NAME'] . "\n";
    $message .= "PHP Version: " . phpversion() . "\n\n";
    $message .= "Wenn Sie diese E-Mail erhalten, funktioniert die Mail-Funktion korrekt.";

    $headers = "From: noreply@poeppel-wkz.com\r\n";
    $headers .= "Reply-To: noreply@poeppel-wkz.com\r\n";
    $headers .= "Return-Path: noreply@poeppel-wkz.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";

    echo "<h2>Sende Test-Mail...</h2>";
    echo "<p><strong>An:</strong> $to</p>";
    echo "<p><strong>Von:</strong> noreply@poeppel-wkz.com</p>";

    $result = mail($to, $subject, $message, $headers, '-f noreply@poeppel-wkz.com');

    if ($result) {
        echo "<p style='color: green; font-weight: bold;'>✓ Mail-Funktion hat TRUE zurückgegeben</p>";
        echo "<p>Bitte prüfen Sie Ihren Posteingang (auch Spam-Ordner) bei: $to</p>";
    } else {
        echo "<p style='color: red; font-weight: bold;'>✗ Mail-Funktion hat FALSE zurückgegeben</p>";
        echo "<p>Mögliche Probleme:</p>";
        echo "<ul>";
        echo "<li>PHP mail() Funktion ist nicht konfiguriert</li>";
        echo "<li>SMTP Server ist nicht erreichbar</li>";
        echo "<li>Die Domain noreply@poeppel-wkz.com ist nicht autorisiert</li>";
        echo "<li>Firewall blockiert ausgehende Mails</li>";
        echo "</ul>";
    }

    echo "<hr>";
    echo "<h2>Server-Konfiguration:</h2>";
    echo "<pre>";
    echo "sendmail_path: " . ini_get('sendmail_path') . "\n";
    echo "SMTP: " . ini_get('SMTP') . "\n";
    echo "smtp_port: " . ini_get('smtp_port') . "\n";
    echo "</pre>";

} else {
    echo "<p><a href='?test=1' style='display: inline-block; padding: 10px 20px; background: #be1823; color: white; text-decoration: none; border-radius: 5px;'>Test-Mail senden</a></p>";
    echo "<p style='color: #666; font-size: 0.9em;'>Die Test-Mail wird an support@poeppel-wkz.de gesendet.</p>";
}

echo "<hr>";
echo "<p style='font-size: 0.9em; color: #666;'><a href='index.html'>← Zurück zur Startseite</a></p>";
?>
