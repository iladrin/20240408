<?php

require '../vendor/autoload.php';

require '../app/services/logs.php';
require '../app/services/security.php';
require '../app/services/database.php';

session_start();

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load('../.env', '../.env.local');

const TEMPLATES_PATH = __DIR__ . '/../app/templates';

//////////
// Routing
// On cherche à déterminer le controller associé à notre URL
// Exemple d’URL : http://localhost/formation/index.php?page=users

// Analyse de la Query string HTTP
$page = $_GET['page'] ?? 'homepage';
//$page = !empty($_GET['page']) ? $_GET['page'] : 'homepage';

// Mapping de routes
// Exemple : http://localhost/formation/?page=users => controller: user/list
$routes = [
    'homepage' => 'homepage',
    'users' => 'user/list',
    'login' => 'security/login',
    'logout' => 'security/logout',
    'movies' => 'movie/list',
];

if (!isset($routes[$page])) {
    trigger_error('Le controller demandé n\'existe pas', E_USER_ERROR);
}

$controller = $routes[$page];

require "../app/controllers/$controller.php";
