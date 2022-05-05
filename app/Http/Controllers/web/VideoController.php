<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
    public function show($brief)
    {
        if(auth()->guest())
        {
            return redirect('/login');
        }
        $video = Video::query()->where('brief', $brief)->first();
        $view = [
            'view' => $video->view
        ];
        $video->update($view);
        return view('web.video.index', compact('video', 'brief'));
    }

    public function search($name)
    {
        $data = Video::query()->where('name', 'like', "%{$name}%")->paginate(20);
        return view('web.video.search', compact('data', 'name'));
    }

    public function qSearch($name)
    {
        $data = Video::query()->where('name', 'like', "%{$name}%")->get();
        $strResult = "";
        foreach($data as $rows){
            $strResult = $strResult."<li><img src=" . asset('upload/images/video/image_video_') . $rows->brief . '.jpg' . "> <a href=" . request()->root() . '/video/detail/' . $rows->brief . ">{$rows->name}</a></li>";
        }
        echo $strResult;
    }

    public function like()
    {
        $data = Video::query()->where('status', 1)->where('deleted', 0)->orderBy('like', 'desc')->paginate(20);
        return view('web.video.like', compact('data'));
    }

    public function recommend()
    {
        $data = Video::query()->where('status', 1)->where('deleted', 0)->where('is_recommend', 1)->paginate(20);
        return view('web.video.recommend', compact('data'));
    }

    public function info($brief)
    {
        $video = Video::query()->where('brief', $brief)->first();
        return view('web.video.info', compact('video', 'brief'));
    }
}
