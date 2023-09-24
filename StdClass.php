<?php

use Class\Hero;

$array = [
    "firstname" => "Ucup",
    "lastname" => "Surucup",
];

// konversi ke object
$object = (object) $array;
var_dump($object);
echo "Firstname object : " . $object->firstname . PHP_EOL;

// konversi ke array
$arrays = (array) $object;
var_dump($arrays);
echo "Firstname array : " . $array['firstname'] . PHP_EOL;


require_once 'Class/Hero.php';

$hero = new Hero("Otong", "Hero Badut");
var_dump($hero);

$arrayHero = (array) $hero;
var_dump($arrayHero);
