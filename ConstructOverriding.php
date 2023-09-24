<?php

require_once 'Class/Hero.php';

use Class\Hero;
use Class\Intel;

$hero = new Hero("Zilong");
$hero->sayHello("Alucard");

$intel = new Intel("Alucard", 400);
$intel->sayHello("Zilong");
