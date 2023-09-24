<?php

require_once 'Class/Animal.php';

use Data\{Cat, Dog};

$cat = new Cat;
$cat->name = "Icha";
$cat->run();

$dog = new Dog;
$dog->name = "Black";
$dog->run();
