<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OvertimeSetup extends Model
{
    use HasFactory;

    protected $table = 'overtime_setup';

    public $timestamps = false;
}
