<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $video_ranking = Video::query()->where('status', 1)->where('deleted', 0)->orderByDesc('view')->limit(10)->offset(0)->get();
        $categories = \App\Models\Category::query()->where('status', 1)->where('deleted', 0)->get();
        $banner = Banner::query()->where('status', 1)->where('deleted', 0)->limit(5)->offset(0)->get();
        return view('web.home.index', compact('video_ranking', 'categories', 'banner'));
    }
}
