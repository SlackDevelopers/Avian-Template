<?php
// /backend/login.php

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

if (!isset($data['username']) || !isset($data['password'])) {
    header('Content-Type: application/json', true, 400); // Bad Request
    echo json_encode(['error' => 'Username and password are required']);
    exit;
}

$username = $data['username'];
$password = $data['password'];

// Configuracion de la api de rocket chat.
$config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setHost(ROCKET_CHAT_API_URL);

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    // Crear el objeto body necesario para el metodo postApiV1Login.
    $body = new Swagger\Client\Model\V1LoginBody();
    $body->setUser($username);
    $body->setPassword($password);

    // Llamar al método correcto: postApiV1Login en vez de login.
    $result = $apiInstance->postApiV1Login($body);

    // Si el login fue exitoso, mandamos el token y el id de usuario.
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success',
        'userId' => $result->getData()->getUserId(),
        'authToken' => $result->getData()->getAuthToken()
    ]);
} catch (Exception $e) {
    // Si el login fallo, devolveremos el error.
    header('Content-Type: application/json', true, 401); // Unauthorized
    echo json_encode([
        'error' => 'Invalid username or password',
        'details' => $e->getMessage(), // Puedes omitir este detalle en producción.
    ]);
}
?>
