<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();

require 'vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router("/");

$router->namespace("Backend\Controllers");

$router->get('/', 'HomeController:Dashboard');


$router->group('api');
//$router->get('/catcher', 'ApiController:Catcher');
$router->post('/catcher', 'ApiController:Catcher');



$router->dispatch();

if ($router->error()) {
    if($router->error() == 404){
        echo file_get_contents('public/template/views/Errors/404.html');
    }
}