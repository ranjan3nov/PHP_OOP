<?php

require_once 'Car.php';
require_once 'SportsCar.php';

$car1 = new SportsCar();

$car1->setModel('Volvo');
echo "Car Model :" . $car1->getModel() . PHP_EOL;
$car1->increaseSpeed();
$car1->applyBreak();
$car1->decreaseSpeed();
