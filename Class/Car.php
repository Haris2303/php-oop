<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface Maintenance
{
    function isMaintenance(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

interface Motorcycle extends Car, HasBrand, Maintenance
{
    function getSpeed(): int;
}

class Avanza implements Car
{
    public function drive(): void
    {
        echo "Drive Avanza" . \PHP_EOL;
    }

    public function getTire(): int
    {
        return 1;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }
}

class CrossX implements Motorcycle
{
    public function getSpeed(): int
    {
        return 400;
    }

    public function drive(): void
    {
        echo "Drive Cross X 250" . \PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Viar";
    }

    public function isMaintenance(): bool
    {
        return true;
    }
}
