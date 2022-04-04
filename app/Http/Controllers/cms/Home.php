<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function login(){
        return view('cms.layouts.login');
    }

    public function index()
    {
        return view('cms.home.index');
    }
}
