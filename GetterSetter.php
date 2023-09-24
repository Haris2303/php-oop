<?php

require_once 'Class/Category.php';

$category = new Category;
$category->setName("Iphone");
$category->setExpensive(true);

$category->setName("");
echo "Name Category: " . $category->getName() . PHP_EOL;
echo "Expensive: " . $category->getExpensive() . PHP_EOL;
