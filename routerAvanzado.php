<?php

require_once 'controller/index.php';

require_once 'routerClass.php';




// CONSTANTES PARA RUTEO

define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');


$r = new Router();
$r->addRoute("", "GET", "controller_index", "home");
$r->addRoute("enviar", "POST", "controller_index", "enviar");
$r->addRoute("volver_home", "GET", "controller_index", "home");


//run

$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);