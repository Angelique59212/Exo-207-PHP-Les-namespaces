<?php

namespace App\Model\Entity;

class User
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;

    }

    public function save($user): string
    {
       return $this->name;
    }
}