<?php

namespace App\Model\Entity;

class Role
{
    private string $role;

    public function __construct(string $role)
    {
        $this->role = $role;
    }

    public function save($role): string
    {
        return $this->role;
    }
}