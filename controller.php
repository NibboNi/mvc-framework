<?php

class Controller
{
  public function index(): void
  {
    require "model.php";

    $model = new Model;

    $products = $model->getData();

    require "view.php";
  }
}
