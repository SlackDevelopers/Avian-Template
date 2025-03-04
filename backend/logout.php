<?php
// /backend/logout.php

// Cargar las dependencias de composer.
require_once __DIR__ . '/Authentication/SwaggerClient-php/vendor/autoload.php';
// Cargar las configuraciones.
require_once __DIR__ . '/config.php';

// Validar el metodo de peticion
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Content-Type: application/json', true, 405); // Method Not Allowed
    echo json_encode(['error' => 'Method Not Allowed']);
    exit;
}

// Recibir y validar el json de entrada
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['authToken']) || !isset($data['userId'])) {
    header('Content-Type: application/json', true, 400); // Bad Request
    echo json_encode(['error' => 'authToken and userId are required']);
    exit;
}

$authToken = $data['authToken'];
$userId = $data['userId'];

// Configuracion de la api de rocket chat.
$config = Swagger\Client\Configuration::getDefaultConfiguration()
                ->setHost(ROCKET_CHAT_API_URL)
                ->setApiKey('X-Auth-Token', $authToken)
                ->setApiKey('X-User-Id', $userId);

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
  new GuzzleHttp\Client(),
  $config
);

try {
    $result = $apiInstance->logout();
    header('Content-Type: application/json');
    echo json_encode(['status' => 'success', 'message' => 'Logged out successfully']);
} catch (Exception $e) {
    header('Content-Type: application/json', true, 500); // Internal Server Error
    echo json_encode([
        'error' => 'Logout failed',
        'details' => $e->getMessage(), // Puedes omitir este detalle en producción.
    ]);
}
?>
