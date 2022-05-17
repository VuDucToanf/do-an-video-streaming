<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Video;

class LikeController extends Controller
{
    public function detail($id)
    {
        $data = Like::query()
            ->where('video_id', $id)->paginate(20);
        $name = Video::query()->select('name')->where('id', $id)->first();
        $name = $name->name;
        return view('cms.like.index', compact('data', 'name'));
    }
}
