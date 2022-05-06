<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];
    protected $table = 'author';
    const TABLE = 'author';
    public $timestamps = false;
}
