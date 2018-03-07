<?php

include 'CarStore.php';
include 'CarStore/CarFactory.php';
include 'CarStore/CarFactory/Dodge.php';
include 'CarStore/CarFactory/Ford.php';
include 'CarStore/CarFactory/Jeep.php';

$carStore = new CarStore();
$car = $carStore->buyCar('Jeep');
$car2 = $carStore->buyCar('Dodge');
var_dump($car);
echo '<hr>';
var_dump($car2);
echo '<hr>';
echo $car->getName();
