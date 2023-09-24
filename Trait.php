<?php

require_once 'Class/SayGoodBye.php';

use Data\Traits\Person;

$person = new Person;
$person->hello("Otong");
$person->goodBye("Otong");

$person->name = "Ucup";
var_dump($person);
