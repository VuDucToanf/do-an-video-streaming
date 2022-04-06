<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property string $email
 * @property string $phone
 * @property int $created_by
 * @property int $updated_by
 * @property int $deleted
 * @property int $status
 */

class Admin extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_UNACTIVE = 0;

    protected $table = 'admin';
    public $timestamps = false;
    protected $guarded = [];
}
