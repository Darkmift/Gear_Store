<?php

include 'CarStore.php';
include 'CarStore/CarFactory.php';
include 'CarStore/CarFactory/Dodge.php';
include 'CarStore/CarFactory/Ford.php';
include 'CarStore/CarFactory/Jeep.php';

$carStore = new CarStore();
$carStore->buyCar('Jeep');
$carStore->buyCar('Dodge');
