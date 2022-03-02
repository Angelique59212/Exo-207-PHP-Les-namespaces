<?php

namespace App\Model\Repository;

use App\Model\Repository\User as UserRepository;

class User
{
    public function __construct(string $name)
    {

    }

    public function save(user $user): User
    {
        return $user;
    }
}