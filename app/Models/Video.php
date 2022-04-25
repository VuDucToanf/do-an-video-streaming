<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * @property int $id
 * @property string $name
 * @property string $brief
 * @property string $description
 * @property int $total_video
 * @property int $thumb_version
 * @property int $view
 * @property int $created_by
 * @property int $updated_by
 * @property string $created_time
 * @property string $updated_time
 * @property int $status
 * @property int $deleted
 * @property int $order
 * @property int $published
 * @property string $published_time
 * @property int $is_full
 * @property int $is_hot
 * @property string $copyright
 * @property int $parent_id
 * @property int $seri_order
 * @property int $type
 * @property int $is_range_of_movies
 */
class Video extends Model
{
    protected $guarded = [];
    protected $table = 'video';
    const TABLE = 'video';
    public $timestamps = false;

    public function category(){

        return $this->belongsToMany('App\Models\Category',  'category_video_relation',  'video_id','category_id');
    }
}
