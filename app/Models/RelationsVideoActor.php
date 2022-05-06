<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelationsVideoActor extends Model
{
    protected $guarded = [];

    protected $table = 'relations_video_actor';

    const TABLE = 'relations_video_actor';

    public $timestamps = false;

    public static function relateFromActor($video_id, $actor_data = []){
        self::query()->where('video_id', '=', $video_id)->delete();
        if (!empty($video_id) && !empty($actor_data)) :
            foreach ($actor_data as $actor_id) {
                $data = [
                    'video_id' => $video_id,
                    'actor_id' => $actor_id,
                    'created_time' => date('Y-m-d H:i:s'),
                    'updated_time' => date('Y-m-d H:i:s'),
                ];
                (new self)->create($data);
            }
        endif;
    }
}
