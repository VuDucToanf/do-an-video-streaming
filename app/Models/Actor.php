<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $guarded = [];
    protected $table = 'actor';
    const TABLE = 'actor';
    public $timestamps = false;
}
