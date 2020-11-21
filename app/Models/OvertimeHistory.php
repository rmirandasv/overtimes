<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OvertimeHistory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'overtime_history';

    public $timestamps = true;

    public function overtime()
    {
        return $this->belongsTo('App\Models\Overtime', 'overtime_id', 'id');
    }

    public function modifiedBy()
    {
        return $this->belongsTo('App\Models\User', 'modifier_user_ud', 'id');
    }

}
