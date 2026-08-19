<?php

class Products
{
  public function index(): void
  {
    require "src/models/model.php";

    $model = new Product;

    $products = $model->getData();

    require "views/products_index.php";
  }
}
