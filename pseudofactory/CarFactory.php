<?php
require_once "Car.php";


class CarFactory
{
    public function build($carType, $carColor, $carPrice) {
        return new Car($carType, $carColor, $carPrice);
    }
}