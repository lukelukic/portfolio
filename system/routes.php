<?php

require 'config.php';
use portfolio\Controllers;

function callController($controller, $method)
{
    $controller = "portfolio\app\Controllers\\" . ucfirst(strtolower($controller));
    if (class_exists($controller)) {
        $controller = new $controller();
        if (method_exists($controller, $method)) {
            $controller->$method();
        } else {
            header("HTTP/1.1 404 Not Found");
            include("Errors/404.php");
        }
    }
}

$URL = $_SERVER['REQUEST_URI'];
$urlVars = explode("/", $URL);

$controller = isset($urlVars[2]) && $urlVars[2] ? explode('?', $urlVars[2])[0] : "Home";
$method = isset($urlVars[3]) && $urlVars[3] ? explode('?', $urlVars[3])[0] : "index";


callController($controller, $method);
