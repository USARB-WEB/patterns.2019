<?php
require_once "CarFactory.php";

$carFactory = new CarFactory();
$cars = [
    "mercedes" => $carFactory->build("Mercedes", "green", 10000),
    "bwm" => $carFactory->build("BMW", "black", 2000),
];

echo "<pre>";
print_r($cars);
echo "</pre>";