<?php

namespace App\Repositories;

interface UserRepository
{

    public function all($data = []);

    public function get($id);

    public function add($user);

    public function update($user);

    public function delete($user);

    public function restore($user);

    public function forceDelete($user);

}