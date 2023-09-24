<?php

require_once 'Class/Manager.php';

use Class\Manager;
use Class\VicePresident;

$manager = new Manager;
$manager->name = "Otong";
$manager->sayHello("Ucup");

$vp = new VicePresident;
$vp->name = "Udin";
$vp->sayHello("Asep");
