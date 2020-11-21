<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OvertimeCost extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'overtime_costs';

    protected $attributes = [
        'cost' => 0.0
    ];

    public $timestamps = true;

    public function history()
    {
        return $this->hasMany('App\Models\OvertimeCost', 'overtime_cost_id', 'id');
    }

}
