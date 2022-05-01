<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelationsCategoryVideo extends Model
{
    protected $guarded = [];

    protected $table = 'relations_video_category';

    const TABLE = 'relations_video_category';

    public $timestamps = false;

    public static function relateFromCategory($video_id, $category_data = []){
        self::query()->where('video_id', '=', $video_id)->delete();
        if (!empty($video_id) && !empty($category_data)) :
            foreach ($category_data as $category_id) {
                $data = [
                    'video_id' => $video_id,
                    'category_id' => $category_id,
                    'created_time' => date('Y-m-d H:i:s'),
                    'updated_time' => date('Y-m-d H:i:s'),
                ];
                (new self)->create($data);
            }
        endif;
    }
}
