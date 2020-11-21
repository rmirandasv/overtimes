<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OvertimeCostHistory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'overtime_cost_history';

    public $timestamps = true;

    public function overtimeCost()
    {
        return $this->belongsTo('App\Models\OvertimeCost', 'overtime_cost_id', 'id');
    }

    public function modifiedBy()
    {
        return $this->belongsto('App\Models\User', 'modifier_user_id', 'id');
    }

}
