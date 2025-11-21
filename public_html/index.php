<?php
$request = $_SERVER['REQUEST_URI'];

// remove query string and slashes
$request = trim(parse_url($request, PHP_URL_PATH), '/');

switch ($request) {
    case '':
        require 'routes/home.php';
        break;
    case 'test':
        require 'routes/test.php';
        break;
    case 'landing-page':
        require 'routes/test_home.php';
        break;
    default:
        http_response_code(404);
        require 'routes/404.php';
        break;
}
?>
