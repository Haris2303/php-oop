<?php

require_once 'Class/Programmer.php';

use Class\BackendProgrammer;
use Class\Company;
use Class\FrontendProgrammer;
use Class\Programmer;

$company = new Company;

$company->programmer = new Programmer("Asep");
$company->programmer->sayHello($company->programmer);

$company->programmer = new FrontendProgrammer("Otong");
$company->programmer->sayHello($company->programmer);

$company->programmer = new BackendProgrammer("Ucup");
$company->programmer->sayHello($company->programmer);
