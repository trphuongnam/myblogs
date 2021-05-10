<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use App\thuvien_xuly\strings;
use Illuminate\Support\Str;

class WebinfoController extends Controller
{
    function index()
    {
        $website_info = WebsiteInfo::where('id', 1)->get()->toArray();
        return view("admin/pages/webinfo", ['website_info'=>$website_info]);
    }

    function add()
    {
        return view("admin/pages/webinfo_add");
    }

    public function save(Request $request)
    {
        $strings = new Strings();
        /* Kiểm tra dữ liệu người dùng nhập lên */
        $arr_value = [
            "name" => "required",
            "description" => "required",
            
        ];

        $arr_rule = [
            "name.required" => "Tên website không được bỏ trống",
            "description.required" => "Mô tả website không được bỏ trống",
           
        ];

        $validate_data = $request->validate($arr_value, $arr_rule);
        if($validate_data == false) return redirect()->back();
        else{
            
            $website_info = new WebsiteInfo();
            $website_info->name = $request->name;
            $website_info->description = $request->description;
            $website_info->avatar = "1231.jpg";
            $website_info->cover_image = "1231.jpg";
            $website_info->email = $request->email;
            $website_info->phone = $request->phone;
            $website_info->facebook = $request->facebook;
            $website_info->other = $request->other;
            $website_info->url_key = Str::slug($request->name, "-");
            $website_info->uid = $strings->rand_string(20);

            $save_website_info = $website_info->save();

            if($save_website_info == true) return redirect('/admin/webinfo')->with("save_success");
            else return redirect()->back()->with("save_error");

        }

    }

    function edit($cat_key)
    {
       
    }

    function update(Request $request)
    {
         
    }
}
