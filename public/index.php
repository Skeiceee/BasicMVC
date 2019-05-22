<?php
require '../helpers/basicMVC/router/Route.php';
require '../helpers/basicMVC/router/Router.php';
require '../controllers/UsuarioController.php';

use UsuarioController\UsuarioController;
use Router\Router;

$base_path = str_replace('/index.php','',$_SERVER["PHP_SELF"]);
$router = new Router($base_path);

$router->add('/usuario', function(){
    $UsuarioController = new UsuarioController();
    $UsuarioController->index();
});

$router->add('/usuario/crear', function(){
    $UsuarioController = new UsuarioController();
    $UsuarioController->crear();  
});

$router->run();

