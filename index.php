<?php
session_start();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

$routes = [
    '' => 'home.php', // Change to your homepage file if needed
    'login' => 'login.php',
    'register' => 'register.php',
    'logout' => 'logout.php',
    'dashboard' => 'admin/dashboard.php',
    // Add more routes as needed
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    echo '<h1>404 Not Found</h1>';
}
