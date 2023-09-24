<?php

namespace Class;

class Programmer
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(Programmer $programmer): void
    {
        if ($programmer instanceof BackendProgrammer) {
            echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
        } elseif ($programmer instanceof FrontendProgrammer) {
            echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
        } else {
            echo "Hello Programmer $programmer->name" . PHP_EOL;
        }
    }
}

class BackendProgrammer extends Programmer
{
}

class FrontendProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}
