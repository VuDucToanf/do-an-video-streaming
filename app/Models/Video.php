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
 * @property string $created_by_name
 * @property string $updated_by_name
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

    public function categories(){
        return $this->belongsToMany(Category::class,  'relations_video_category',  'video_id','category_id');
    }

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }

    public function actors(){
        return $this->belongsToMany(Actor::class, 'relations_video_actor', 'video_id', 'actor_id');
    }

    public function authors(){
        return $this->belongsToMany(Author::class, 'relations_video_author', 'video_id', 'author_id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
