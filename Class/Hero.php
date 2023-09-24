<?php

namespace Class;

class Hero
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Normal Hero")
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function sayHello(string $name): void
    {
        echo PHP_EOL . "Hi $name, my name is $this->name, I am $this->title" . PHP_EOL;
    }
}

class Intel extends Hero
{
    var string $name;
    var string $title;
    var string $strength;

    public function __construct(string $name = "", ?int $strength = 0)
    {
        // tidak wajib tapi direkomendasikan
        parent::__construct($name, "Hero Intel");
        $this->strength = $strength;
    }

    public function sayHello(string $name): void
    {
        parent::sayHello($name);
        echo "My strengh is $this->strength Power" . PHP_EOL;
    }
}
