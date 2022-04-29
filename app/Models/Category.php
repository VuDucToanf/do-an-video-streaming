<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $view
 * @property int $thumb_version
 * @property int $created_by
 * @property int $updated_by
 * @property string $created_time
 * @property string $updated_time
 * @property int $status
 * @property int $deleted
 * @property int $parent_id
 * @property string $slug
 *
 */
class Category extends Model
{
    protected $guarded = [];
    protected $table = 'category';
    const TABLE = 'category';
}
