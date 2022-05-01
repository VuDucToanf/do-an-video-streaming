<?php

namespace App\Http\Controllers\cms\Auth;

use App\Http\Requests\Cms\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Auth extends Controller
{
    protected $user;
    protected $auth;

    public function getLogin(){
        if(!isset($_SESSION['admin']))
            return view('cms.layouts.login');
        else
            return redirect('/login');
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
                $_SESSION['admin'] = $user;
                return redirect('/');
            }
        }
    }

    public function getLogout(LoginRequest $request)
    {
        echo 1; die;
        unset($_SESSION['admin']);
        return redirect('/login');
    }
}
