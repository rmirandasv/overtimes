<?php

namespace App\Repositories;

use App\Models\Overtime;
use App\Repositories\CostConfigRepository;
use Carbon\Carbon;

class OvertimeRepositoryImpl implements OvertimeRepository
{
    protected $overtimeCostRepo;

    public function __construct(CostConfigRepository $overtimeCostRepo)
    {
        $this->overtimeCostRepo = $overtimeCostRepo;
    }

    public function all($data = [])
    {
        return Overtime::paginate(10);
    }

    public function register($data = [])
    {
        $overtime = new Overtime();

        $overtime->user_id = $data['employee'];
        $overtime->overtime_desc = $data['overtime_desc'];

        $startTime = new Carbon($data['start_date'] . ' ' . $data['start_time']);
        $finishTime = new Carbon($data['finish_date']. ' ' . $data['finish_time']);
        $workedMinutes = $startTime->diffInMinutes($finishTime);
        $cost = $this->overtimeCostRepo->getWorkedCost($workedMinutes);

        $overtime->start_time = $startTime;
        $overtime->finish_time = $finishTime;
        $overtime->overtime_cost = $cost->cost;
        $overtime->worked_minutes = $workedMinutes;

        if ($overtime->save()){
            return $overtime;
        }

        return false;
    }
}