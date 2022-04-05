<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function getLogin(){
        return view('cms.layouts.login');
    }

    public function postLogin()
    {

    }

    public function getLogout(){

    }

    public function index()
    {
        return view('cms.home.index');
    }
}
