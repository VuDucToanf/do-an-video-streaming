<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Video;

class HomeController extends Controller
{
    public function index(){
        $video_ranking = Video::query()->where('status', 1)->where('deleted', 0)->orderByDesc('view')->limit(10)->offset(0)->get();
        $categories = \App\Models\Category::query()->where('status', 1)->where('deleted', 0)->get();
        $banner = Banner::query()->where('status', 1)->where('deleted', 0)->limit(5)->offset(0)->get();
        return view('web.home.index', compact('video_ranking', 'categories', 'banner'));
    }
}
