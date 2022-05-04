<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $like = new Like;
        $like->fill($request->all());
        $like->created_time = date('Y-m-d H:i:s');
        $like->updated_time = date('Y-m-d H:i:s');
        $like->save();
        DB::table('video')->where('id', $request->get('video_id'))->update(['like' => DB::raw('`like` + 1')]);
    }

    public function removeLike(Request $request){
        $user_id = $request->user_id;
        $video_id = $request->video_id;
        DB::table('like')->where('user_id', $user_id)->where('video_id', $video_id)->delete();
        DB::table('video')->where('id', $request->get('video_id'))->update(['like' => DB::raw('`like` - 1')]);
    }

    public function getLikes($id){
        $video = Video::query()->where('id', $id)->first();
        $likes = Like::query()->select('video_id', 'user_id')->where('video_id', $video->id)->get();
        $video->liked = '';
        foreach($likes as $like){
            if($like->user_id == auth()->user()->id){
                $video->liked = 'active';
            }
        };
        return response()->json(['likes'=>$likes,'liked'=>$video->liked]);
    }
}
