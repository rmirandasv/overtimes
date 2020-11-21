<?php

namespace App\Repositories;

use App\Repositories\RoleRepository;
use App\Models\Role;

class RoleRepositoryImpl implements RoleRepository
{

    public function all()
    {
        return Role::all();
    }

}