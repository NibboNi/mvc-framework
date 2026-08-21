<?php

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

require "src/rotuer.php";
$router = new Router;

$router->add("/", ["controller" => "home", "action" => "index"]);
$router->add("/home", ["controller" => "home", "action" => "index"]);
$router->add("/index", ["controller" => "home", "action" => "index"]);
$router->add("/products", ["controller" => "products", "action" => "index"]);
$router->add("/products/show", ["controller" => "products", "action" => "show"]);

$params = $router->match($path);

if (!$params) {
  die("Route Not Found!");
}

$controller = $params["controller"];
$action = $params["action"];

require "src/controllers/{$controller}.php";
$controllerObject = new $controller;

$controllerObject->$action();
