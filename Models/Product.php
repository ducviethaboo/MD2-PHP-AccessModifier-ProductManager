<?php
namespace Models;


class Product
{
    private $name;
    private $price;

    public function __construct($name = NULL, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function getPrice()
    {
        return $this->price;
    }
}