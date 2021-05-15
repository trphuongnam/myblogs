<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function profile($url_key){
        $arr_url_key = explode("-", $url_key);
        $uid = $arr_url_key[count($arr_url_key)-1];

        $data_user = User::where('uid', $uid)->get()->toArray();
        return view("admin/pages/user_profile", ['data_user'=>$data_user]);
    }

    function update(Request $request)
    {
        // $id = $request->id;
        // $fullname = $request->fullname;
        // $username = $request->username;
        // $password = $request->password;
        // $description = $request->description;
        // $phone = $request->phone;

        // $uid = DB::table('users')->where('id', $id)->pluck('uid');

        // $user = User::find($id);
        // $user->username = $username;
        // $user->password = bcrypt($password);
        // $user->phone = $phone;
        // $user->description = $description;
        // $update_info = $user->save();
        
        // if($update_info === true)  return url('/admin/profile/').'/'.Str::slug($fullname).'-'.$uid[0];
        // else return "Loi";
        return $request;
    }
}
