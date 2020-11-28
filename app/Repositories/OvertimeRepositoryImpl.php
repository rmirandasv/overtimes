<?php

namespace App\Repositories;

use App\Models\Overtime;

class OvertimeRepositoryImpl implements OvertimeRepository
{
    public function all($data = [])
    {
        return Overtime::paginate(10);
    }

    public function create()
    {
        return view('overtimes.create');
    }
}