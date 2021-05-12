<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login/pages/login');
    }

    function login(Request $request)
    {
        //dd($request);
        $arr_check = [
            'username'=>$request->username,
            'password'=>$request->password,
            'type'=> [1, 2]
        ];

        if(Auth::attempt($arr_check, $request->remember) === true)
        {
            return redirect('/admin');
        }else{
            $request->session()->flash('login_unaccepted', 'Tài khoản của bạn không đúng. Vui lòng thử lại!');
            return redirect()->back()->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return view('login/pages/login');
    }
}
