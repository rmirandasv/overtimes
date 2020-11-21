<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OvertimeAttachment extends Model
{
    use HasFactory;

    protected $table = 'overtime_attachments';

    public function overtime()
    {
        return $this->belongsTo('App\Models\Overtime', 'overtime_id', 'id');
    }

}
