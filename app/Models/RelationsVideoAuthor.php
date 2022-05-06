<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelationsVideoAuthor extends Model
{
    protected $guarded = [];

    protected $table = 'relations_video_author';

    const TABLE = 'relations_video_author';

    public $timestamps = false;

    public static function relateFromAuthor($video_id, $author_data = []){
        self::query()->where('video_id', '=', $video_id)->delete();
        if (!empty($video_id) && !empty($author_data)) :
            foreach ($author_data as $author_id) {
                $data = [
                    'video_id' => $video_id,
                    'author_id' => $author_id,
                    'created_time' => date('Y-m-d H:i:s'),
                    'updated_time' => date('Y-m-d H:i:s'),
                ];
                (new self)->create($data);
            }
        endif;
    }
}
