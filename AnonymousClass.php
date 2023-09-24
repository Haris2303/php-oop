<?php

interface HelloWorld
{
    function sayHello(): void;
}

class Hello implements HelloWorld
{
    public function sayHello(): void
    {
        echo "Hello World" . PHP_EOL;
    }
}

$helloWorld = new Hello;
$helloWorld->sayHello();
