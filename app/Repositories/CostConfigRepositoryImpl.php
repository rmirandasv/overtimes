<?php

namespace App\Repositories;

use App\Models\OvertimeCost;

class CostConfigRepositoryImpl implements CostConfigRepository
{
    public function all()
    {
        return OverTimeCost::all();
    }

    public function create($data = [])
    {
        $cost = new OvertimeCost();

        $cost->initial_minute = $data['initial_minute'];
        $cost->final_minute = $data['final_minute'];
        $cost->cost = $data['cost'];

        if ($cost->save()) {
            return $cost;
        }

        return false;
    }

    public function getWorkedCost($workedMinutes)
    {
        $cost = null;

        $cost = OvertimeCost::whereRaw($workedMinutes . ' >= initial_minute')
            ->whereRaw($workedMinutes . ' <= final_minute')->first();

        return $cost;
    }
}