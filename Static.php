<?php

require_once 'Helper/MathHelper.php';

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Metode Numerik";

echo MathHelper::$name . PHP_EOL;

echo MathHelper::sum(12, 13, 32, 9, 5.9) . PHP_EOL;
