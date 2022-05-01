<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
    public function show($brief)
    {
        $video = Video::query()->where('brief', $brief)->first();
        return view('web.video.index', compact('video'));
    }
}
