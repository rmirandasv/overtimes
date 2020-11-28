<?php

namespace App\Repositories;

interface CostConfigRepository
{
    public function all();

    public function create($data = []);
}