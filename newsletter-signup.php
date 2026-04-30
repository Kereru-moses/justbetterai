<?php
declare(strict_types=1);

/**
 * Load local project config when present (kept out of git).
 * Expected file: newsletter-config.php returning an associative array.
 */
$localConfig = [];
$localConfigPath = __DIR__ . '/newsletter-config.php';
if (is_file($localConfigPath)) {
    $loadedConfig = require $localConfigPath;
    if (is_array($loadedConfig)) {
        $localConfig = $loadedConfig;
    }
}

function get_newsletter_config(string $key, array $localConfig): string
{
    $localValue = trim((string)($localConfig[$key] ?? ''));
    if ($localValue !== '') {
        return $localValue;
    }

    return trim((string)getenv($key));
}

function redirect_with_status(string $status): void
{
    header('Location: ./get-started.html?newsletter=' . rawurlencode($status) . '#newsletter-signup', true, 303);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    redirect_with_status('invalid_method');
}

// Simple bot trap: real users should never fill this hidden field.
$honeypot = trim((string)($_POST['company'] ?? ''));
if ($honeypot !== '') {
    redirect_with_status('ok');
}

$email = filter_var(trim((string)($_POST['email'] ?? '')), FILTER_VALIDATE_EMAIL);
if ($email === false) {
    redirect_with_status('invalid_email');
}

$firstName = trim((string)($_POST['first_name'] ?? ''));

$apiBaseUrl = get_newsletter_config('NEWSLETTER_API_BASE_URL', $localConfig);
if ($apiBaseUrl === '') {
    $apiBaseUrl = 'https://developers.hostinger.com';
}

$profileUuid = get_newsletter_config('NEWSLETTER_PROFILE_UUID', $localConfig);
if ($profileUuid === '') {
    error_log('Newsletter signup config missing: NEWSLETTER_PROFILE_UUID');
    redirect_with_status('config_error');
}

$apiEndpoint = rtrim($apiBaseUrl, '/') . '/api/reach/v1/profiles/' . rawurlencode($profileUuid) . '/contacts';
$apiKey = get_newsletter_config('NEWSLETTER_API_KEY', $localConfig);
if ($apiKey === '') {
    error_log('Newsletter signup config missing: NEWSLETTER_API_KEY');
    redirect_with_status('config_error');
}

$payload = [
    'email' => $email,
    'name' => $firstName,
];

$jsonPayload = json_encode($payload);
if ($jsonPayload === false) {
    redirect_with_status('payload_error');
}

$ch = curl_init($apiEndpoint);
if ($ch === false) {
    redirect_with_status('request_error');
}

curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $jsonPayload,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CONNECTTIMEOUT => 10,
    CURLOPT_TIMEOUT => 20,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Accept: application/json',
        'Authorization: Bearer ' . $apiKey,
    ],
]);

$responseBody = curl_exec($ch);
if ($responseBody === false) {
    $curlError = curl_error($ch);
    curl_close($ch);
    error_log('Newsletter signup request failed: ' . $curlError);
    redirect_with_status('request_error');
}

$httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode < 200 || $httpCode >= 300) {
    error_log('Newsletter signup API error: HTTP ' . $httpCode . ' body: ' . substr((string)$responseBody, 0, 500));
    redirect_with_status('api_error');
}

redirect_with_status('ok');
