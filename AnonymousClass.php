<?php

interface HelloWorld
{
    function sayHello(): void;
}

$helloWorld = new class("Ucup") implements HelloWorld
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sayHello(): void
    {
        echo "Hello World " . $this->getName() . PHP_EOL;
    }
};
$helloWorld->sayHello();
