<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        return view('web.video.index');
    }
}
