<?php
require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../routes/web.php';

$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);
