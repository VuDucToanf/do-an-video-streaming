<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportAccessLog extends Model
{
    protected $guarded = [];
    protected $table = 'report_access_log';
    const TABLE = 'report_access_log';
    public $timestamps = false;
}
