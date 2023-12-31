<?php

namespace Class;

class Manager
{
    var string $name;

    public function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . \PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function sayHello(string $name): void
    {
        echo "Hi $name, my name is VicePresident $this->name" . \PHP_EOL;
    }
}
