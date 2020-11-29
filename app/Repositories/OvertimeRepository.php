<?php

namespace App\Repositories;

interface OvertimeRepository
{
    public function all($data = []);

    public function register($data = []);
}