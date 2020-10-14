<?php
include_once 'Models/Product.php';
include_once 'Services/ProductManager.php';

use Models\Product;
use Services\ProductManager;

$productManager = new ProductManager();
$productManager->add(new Product("LapTop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProduct();
foreach ($products as $product) {
    echo $product->getName() . "<br>";
}