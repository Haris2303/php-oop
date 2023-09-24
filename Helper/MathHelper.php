<?php

class MathHelper
{
    public static string $name = "Math";

    public static function sum(float ...$numbers)
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}
