<?php

require "vendor/autoload.php";

$router = new Router();
$router->handleRequest($_GET);

?>