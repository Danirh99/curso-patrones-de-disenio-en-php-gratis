<?php
require 'app/Core/DB.php';
require 'app/Controllers/PostsController.php';

define('VIEWS_PATH', __DIR__ . '/app/Views');
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        $controller = new PostsController();
        $controller->index();
        break;
    case '/show':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $controller = new PostsController();
        $controller->show($id);
        break;
    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;
}
