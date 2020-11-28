<?php

namespace App\Repositories;

interface UserRepository
{

    public function all($data = []);

    public function get($id);

    public function add($data);

    public function update($id, $data = []);

    public function delete($id);

    public function restore($id);

    public function forceDelete($id);

    public function unlockUserById($userId) : bool;

    public function enableUserById($userId): bool;

    public function disableUserById($userId) : bool;

    public function getAllEmployees($data = []);

}