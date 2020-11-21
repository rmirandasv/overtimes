<?php

namespace App\Repositories;

use App\Models\User;

class UserRepositoryImpl implements UserRepository
{
    use BasicGetAllTrait;
    use BasicGetOneTrait;
    use BasicUpdateTrait;
    use BasicDeleteTrait;
    use BasicForceDeleteTrait;
    use BasicRestoreTrait;

    protected function getModel()
    {
        return User::class;
    }

    public function add($data = [])
    {
        $user = new User();

        $user->name         = $data['name'];
        $user->last_name    = $data['last_name'];
        $user->username     = $data['username'];
        $user->password     = $data['password'];
        $user->role_id      = $data['role_id'];

        return $user->save();
    }
}