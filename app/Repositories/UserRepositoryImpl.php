<?php

namespace App\Repositories;

use App\Models\User;

class UserRepositoryImpl implements UserRepository
{

    public function all($data = [])
    {
        return User::paginate(10);
    }

    public function get($id)
    {
        return User::findOrFail($id);
    }

    public function add($data)
    {
        $user = new User();

        if ($data instanceof $user) {
            $user = $data;
        }

        if (\is_array($data)) {
            $user->name         = $data['name'];
            $user->last_name    = $data['last_name'];
            $user->username     = $data['username'];
            $user->password     = $data['password'];
            $user->role_id      = $data['role_id'];
        }

        return $user->save() ? $user : false;
    }

    public function update($id, $data = [])
    {
        $user = new User();

        if ($id instanceof $user) {
            //return $this->add(id);
        }

        $user = USer::find($id);

        $user->name         = $data['name'];
        $user->last_name    = $data['last_name'];
        $user->username     = $data['username'];

        if (isset($data['password'])) {
            $user->password = $data['password'];
        }

        $user->role_id      = $data['role_id'];

        if (!$user->isDirty()) {
            return $user;
        }

        return $user->save() ? $user : false;
    }

    public function delete($id)
    {
        $user = new User();

        if ($user instanceof $id) {
            $user = $id;
        }

        $user = User::find($id);

        return $user->delete();
    }

    public function restore($id)
    {
        $user = new User();

        if ($user instanceof $id) {
            $user = $id;
        }

        $user = User;;find($id);

        return $user->restore();
    }

    public function forceDelete($id)
    {
        $user = new User();

        if ($user instanceof $id) {
            $user = $id;
        }

        $user = User;;find($id);

        return $user->forceDelete();
    }

    public function unlockUserById($userId) : bool
    {
        $user = User::find($userId);

        $user->locked = 0;

        return $user->save();
    }

    public function enableUserById($userId) : bool
    {
        $user = User::find($userId);

        $user->active = 1;

        return $user->save();
    }

    public function disableUserById($userId) : bool
    {
        $user = User::find($userId);

        $user->active = 0;

        return $user->save();
    }

    public function getAllEmployees($data = [])
    {
        return User::where('role_id', 2)->get();
    }
}