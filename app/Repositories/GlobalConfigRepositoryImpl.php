<?php

namespace App\Repositories;

use App\Models\OvertimeSetup;

class GlobalConfigRepositoryImpl implements GlobalConfigRepository
{
    public function all()
    {
        return OvertimeSetup::all();
    }
}