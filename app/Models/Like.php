<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = [];
    protected $table = 'like';
    const TABLE = 'like';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function video()
    {
        return $this->belongsTo('App\Models\User');
    }
}
