<?php

$controller = $_GET["controller"];
$action = $_GET["action"];

require "src/controllers/{$controller}.php";
$controllerObject = new $controller;

$controllerObject->$action();
