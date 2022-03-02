<?php

namespace App\Model\Repository;

use App\Model\Repository\Role as RoleRepository;

class Role
{
    public function __construct()
    {
    }

    public function save(role $role): Role
    {
        return $role;
    }
}