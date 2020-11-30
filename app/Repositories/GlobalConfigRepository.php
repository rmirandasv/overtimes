<?php

namespace App\Repositories;

interface GlobalConfigRepository
{
    public function all();

    public function updateGlobalConfig($data = []);

}