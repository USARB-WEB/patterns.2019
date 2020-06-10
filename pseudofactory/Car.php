<?php

class Car
{
    private $brand = null;
    private $color = null;
    private $price = 0;

    public function __construct($brand, $color, $price)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
    }
}