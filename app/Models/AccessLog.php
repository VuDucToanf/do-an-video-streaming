<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    protected $guarded = [];
    protected $table = 'access_log';
    const TABLE = 'access_log';
    public $timestamps = false;
}
