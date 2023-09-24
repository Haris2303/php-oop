<?php

require_once 'Class/Car.php';

use Data\{Avanza, CrossX};

$car = new Avanza;
$car->drive();

$motor = new CrossX;
$motor->drive();
echo "Brand: " . $motor->getBrand() . PHP_EOL;
echo "Speed: " . $motor->getSpeed() . PHP_EOL;
echo "Maintenance: " . $motor->isMaintenance() . PHP_EOL;
