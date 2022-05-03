<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $guarded = [];
    protected $table = 'banner';
    const TABLE = 'banner';
    public $timestamps = false;
}
