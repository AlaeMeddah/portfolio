<?php
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

// ---------- Settings (environment variables) ----------
$apiKey = getenv('RESEND_API_KEY');
$mailTo = getenv('MAIL_TO');
// without a verified domain, Resend only allows this sender
$mailFrom = getenv('MAIL_FROM') ?: 'Portfolio <onboarding@resend.dev>';

if (!$apiKey || !$mailTo) {
    respond(500, ['error' => 'Mail server is not configured.']);
}

// ---------- Send through the Resend HTTPS API ----------
$body = "Nom : $name\n"
    . "Prénom : $fname\n"
    . "Email : $email\n"
    . "Âge : " . ($age !== '' ? $age : '-') . "\n"
    . "Téléphone : " . ($phone !== '' ? $phone : '-') . "\n\n"
    . "Message :\n$message\n";

$payload = json_encode([
    'from' => $mailFrom,
    'to' => [$mailTo],
    'reply_to' => $email,
    'subject' => 'Portfolio - message de ' . $fname . ' ' . $name,
    'text' => $body,
], JSON_UNESCAPED_UNICODE);

$curl = curl_init('https://api.resend.com/emails');
curl_setopt_array($curl, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json',
    ],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CONNECTTIMEOUT => 10,
    CURLOPT_TIMEOUT => 15,
]);

$response = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$curlError = curl_error($curl);
curl_close($curl);

if ($response === false) {
    error_log('Contact form mail error (curl): ' . $curlError);
    respond(500, ['error' => 'The message could not be sent. Please try again later.']);
}

if ($status < 200 || $status >= 300) {
    error_log('Contact form mail error (Resend ' . $status . '): ' . $response);
    respond(500, ['error' => 'The message could not be sent. Please try again later.']);
}

respond(200, ['success' => true]);