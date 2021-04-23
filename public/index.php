<?php

ini_set('display_errors',1);

include '../vendor/autoload.php';

function main() : void
{
    include '../vendor/autoload.php';
    include '../config/database.php';

    $url = $_SERVER['REQUEST_URI'];

    $routes = include '../config/routes.php';

    if(!$routes[$url]){
        echo "<h1>Página não encontrada</h1>";
        return;
    }

    $controller = $routes[$url]['Controller'];
    $method = $routes[$url]['action'];

    (new $controller())->$method();
}
include '../views/initial.phtml';