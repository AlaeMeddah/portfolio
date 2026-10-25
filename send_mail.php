<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

header('Content-Type: application/json; charset=UTF-8');

function respond($status, $payload)
{
    http_response_code($status);
    echo json_encode($payload, JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(405, ['error' => 'Method not allowed.']);
}

// ---------- Read and clean the fields ----------
function field($key)
{
    return trim(strip_tags($_POST[$key] ?? ''));
}

$name = field('name');
$fname = field('fname');
$email = field('email');
$age = field('age');
$phone = field('phone');
$message = trim($_POST['message'] ?? '');

// honeypot: real users never fill this hidden field
if (field('website') !== '') {
    respond(200, ['success' => true]);
}

// ---------- Validation ----------
if ($name === '' || $fname === '' || $email === '' || $message === '') {
    respond(400, ['error' => 'Please fill in all the mandatory fields.']);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(400, ['error' => 'Invalid email address.']);
}
if ($age !== '' && (!ctype_digit($age) || (int) $age < 3 || (int) $age > 99)) {
    respond(400, ['error' => 'Age must be between 3 and 99.']);
}
if ($phone !== '' && !preg_match('/^[0-9]{10}$/', $phone)) {
    respond(400, ['error' => 'Phone number must contain 10 digits.']);
}
if (mb_strlen($message) > 5000) {
    respond(400, ['error' => 'Message is too long (5000 characters max).']);
}

// ---------- SMTP settings (environment variables) ----------
$smtpHost = getenv('SMTP_HOST') ?: 'smtp.gmail.com';
$smtpPort = (int) (getenv('SMTP_PORT') ?: 587);
$smtpUser = getenv('SMTP_USER');
$smtpPass = getenv('SMTP_PASS');
$mailTo = getenv('MAIL_TO') ?: $smtpUser;

if (!$smtpUser || !$smtpPass || !$mailTo) {
    respond(500, ['error' => 'Mail server is not configured.']);
}

// ---------- Send ----------
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;
    $mail->SMTPSecure = $smtpPort === 465 ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $smtpPort;
    $mail->CharSet = 'UTF-8';

    // the sender is our own account; the visitor is set as Reply-To
    $mail->setFrom($smtpUser, 'Portfolio');
    $mail->addAddress($mailTo);
    $mail->addReplyTo($email, $fname . ' ' . $name);

    $mail->Subject = 'Portfolio - message de ' . $fname . ' ' . $name;
    $mail->Body = "Nom : $name\n"
        . "Prénom : $fname\n"
        . "Email : $email\n"
        . "Âge : " . ($age !== '' ? $age : '-') . "\n"
        . "Téléphone : " . ($phone !== '' ? $phone : '-') . "\n\n"
        . "Message :\n$message\n";

    $mail->send();
    respond(200, ['success' => true]);
} catch (Exception $e) {
    error_log('Contact form mail error: ' . $mail->ErrorInfo);
    respond(500, ['error' => 'The message could not be sent. Please try again later.']);
}
