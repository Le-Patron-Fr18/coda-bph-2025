<?php
require_once __DIR__ . '/config/autoload.php';
// Au besoin, charger explicitement le routeur si l'autoload ne le fait pas
require_once __DIR__ . '/config/Routeur.php';

$router = new Router();
$router->handleRequest($_GET);

?>
