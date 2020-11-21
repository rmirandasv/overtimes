<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'overtimes';
    protected $primaryKey = 'id';
    
    public $timestamps = true;

    protected $attrinutes = [
        'overtime_cost' => 0.0
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id','id');
    }

    public function attachments()
    {
        return $this->hasMany('App\Models\OvertimeAttachment', 'overtime_id', 'id');
    }

    public function history() 
    {
        return $this->hasMany('App\Models\OvertimeHistory', 'overtime_id', 'id');
    }

}
