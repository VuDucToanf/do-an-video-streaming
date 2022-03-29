<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function index(){
        return view('web.home.index');
    }
}
