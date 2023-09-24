<?php

require_once 'Class/Shape.php';

use Class\Shape;
use Class\Rectangle;

$shape = new Shape;
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle;
echo $rectangle->getParentCorner() . PHP_EOL;
