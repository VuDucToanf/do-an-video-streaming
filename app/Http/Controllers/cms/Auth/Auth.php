<?php

namespace App\Http\Controllers\cms\Auth;

use App\Http\Requests\Cms\LoginRequest;
use App\Models\Admin;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Department;
use App\Http\Requests;
use Cookie;
use Tracker;
use Session;

class Auth extends Controller
{
    protected $user;
    protected $auth;

    public function getLogin(){
        return view('cms.layouts.login');
    }

    public function postLogin(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');
        $remember = $request->get('remember');
        $user = Admin::query()->where('username', '=', $username)
            ->where('status', '=', Admin::STATUS_ACTIVE)
            ->first();
        if ($user !== null && $user instanceof Admin){
            if($user->password === $password){
                Session::put('admin', $user);
                return redirect('/');
            }
        }
    }

    public function getLogout(LoginRequest $request)
    {
        $this->auth->logout();
        $request->session()->forget('admin');
        return redirect('/login');
    }
}
