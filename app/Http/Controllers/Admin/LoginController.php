<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\MailResetPasswordController;

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

    function reset()
    {
        return view('login/pages/reset_pass');
    }

    function checkReset(Request $request)
    {
        $send_mail = new MailResetPasswordController();

        $email = $request->email;
        $arr_rule = [
            "email"=>"required|email"
        ];

        $arr_msg = [
            "email.required" => "Vui lòng nhập email",
            "email.email" => "Email không đúng định dạng"
        ];

        $validation = $request->validate($arr_rule, $arr_msg);

        if($validation == false) return redirect()->route('reset_pass')->withInput();
        else{

            /* Kiểm tra email có tồn tại trong hệ thống không */
            $user_infos = User::where('email', $email)->get()->toArray();
            if($user_infos)
            {
                return $send_mail->send($email, $user_infos);
            }
            else return redirect()->route('reset_pass')->withInput();
        }
    }
}
