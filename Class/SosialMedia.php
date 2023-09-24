<?php


class SosialMedia
{
    public string $name;
}

// Final class tidak bisa di inheritance
final class Facebook extends SosialMedia
{
    // final method tidak bisa di override
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
    public function login(string $username, string $password): bool
    {
        return false;
    }
}
