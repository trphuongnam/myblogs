<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;
use App\Models\User;
use App\thuvien_xuly\strings;

class MailResetPasswordController extends Controller
{
    public $strings;

    function send($email_receiver, $user_infos){

        $strings = new Strings();

        // echo "người nhận ".$email_receiver."<br>";
        // echo "thông tin nguoi nhan: <br> <pre>";
        // print_r($user_infos);

        $info_send = [
            "username" => $user_infos[0]['username'],
            "fullname" => $user_infos[0]['fullname'],
            "phone" => $user_infos[0]['phone'],
            "email" => $user_infos[0]['email'],
            "new_password" => $strings->rand_string(10)
        ];

        /* Cập nhật lại mật khẩu mới đã tạo vào database */
        $user = User::find($user_infos[0]['id']);
        $user->password = bcrypt($info_send['new_password']);
        $update_pass = $user->save();

        $sending_mail = Mail::to($email_receiver)->send(new ResetPassword($info_send));
        return redirect()->route('login')->with("sending_success", "Vui lòng kiểm tra email của bạn để lấy mật khẩu");
    }
}
