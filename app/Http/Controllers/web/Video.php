<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class Video extends Controller
{
    public function index()
    {
        return view('web.video.index');
    }
}
