<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportLike extends Model
{
    protected $guarded = [];
    protected $table = 'report_like';
    const TABLE = 'report_like';
    public $timestamps = false;
}
