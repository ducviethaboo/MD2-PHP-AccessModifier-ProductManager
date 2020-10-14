<?php
namespace Services;


class ProductManager {
    private $product;
    public function __construct()
    {
        $this->product = [];
    }

    function add($product) {
        $this->product[] = $product;
    }
    function getProduct() {
        return $this->product;
    }
}
