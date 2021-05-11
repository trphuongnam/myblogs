<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use App\thuvien_xuly\strings;
use Illuminate\Support\Str;
use App\Http\Controllers\admin\Input;

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
            "avatar"=>"required",
            "cover_image"=>"required"
        ];

        $arr_rule = [
            "name.required" => "Tên website không được bỏ trống",
            "description.required" => "Mô tả website không được bỏ trống",
            "avatar.required"=>"Ảnh đại diện không được bỏ trống",
            "cover_image.required"=>"Ảnh bìa không được bỏ trống"
        ];

        $validate_data = $request->validate($arr_value, $arr_rule);
        if($validate_data == false) return redirect()->back()->withInput();
        else{
            
            $avatar_name = "";
            $cover_image_name = "";
            
            if(request()->hasfile('avatar') && request()->hasfile('cover_image'))
            {
                $uploaded_avatar = $request->file('avatar');
                $uploaded_cover_image = $request->file('cover_image');

                /* Tạo đường dẫn lưu file */
                $path_save_file = public_path('/uploads/images');

                /* Tạo mảng chứa các đuôi file cho phép */
                $arr_extension_file = ['png'=>'png', 'jpeg'=>'jpeg', 'jpg'=>'jpg'];

                $avatar_name = $this->upload_avatar($path_save_file, $arr_extension_file, $uploaded_avatar);
                $cover_image_name = $this->upload_cover_image($path_save_file, $arr_extension_file, $uploaded_cover_image);                
            }
            

            $website_info = new WebsiteInfo();
            $website_info->name = $request->name;
            $website_info->description = $request->description;
            $website_info->avatar = $avatar_name;
            $website_info->cover_image = $cover_image_name;
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

    function edit($key)
    {
        $array_url = explode("-", $key);
        $uid = $array_url[count($array_url)-1];

        $webinfo = WebsiteInfo::where("uid", $uid)->get()->toArray();
        return view("/admin/pages/webinfo_edit", ["webinfo"=>$webinfo]);
    }

    function update(Request $request)
    {
         /* Kiểm tra dữ liệu người dùng nhập lên */
        $arr_value = [
            "name" => "required",
            "description" => "required"
        ];

        $arr_rule = [
            "name.required" => "Tên website không được bỏ trống",
            "description.required" => "Mô tả website không được bỏ trống"
        ];

        $validate_data = $request->validate($arr_value, $arr_rule);
        if($validate_data == false) return redirect()->back()->withInput();
        else{
            
            $avatar_name = "";
            $cover_image_name = "";
            
            if(request()->hasfile('avatar') && request()->hasfile('cover_image'))
            {
                $uploaded_avatar = $request->file('avatar');
                $uploaded_cover_image = $request->file('cover_image');

                /* Tạo đường dẫn lưu file */
                $path_save_file = public_path('/uploads/images');

                /* Tạo mảng chứa các đuôi file cho phép */
                $arr_extension_file = ['png'=>'png', 'jpeg'=>'jpeg', 'jpg'=>'jpg'];

                $avatar_name = $this->upload_avatar($path_save_file, $arr_extension_file, $uploaded_avatar);
                $cover_image_name = $this->upload_cover_image($path_save_file, $arr_extension_file, $uploaded_cover_image);                
            }
            

            $website_info = WebsiteInfo::find($request->id);
            $website_info->name = $request->name;
            $website_info->description = $request->description;
            if($avatar_name !== "") $website_info->avatar = $avatar_name;
            if($cover_image_name !== "") $website_info->cover_image = $cover_image_name;
            $website_info->email = $request->email;
            $website_info->phone = $request->phone;
            $website_info->facebook = $request->facebook;
            $website_info->other = $request->other;
            $website_info->url_key = Str::slug($request->name, "-");

            $save_website_info = $website_info->save();

            if($save_website_info == true) return redirect('/admin/webinfo')->with("save_success");
            else return redirect()->back()->with("save_error");
        }
    }

    /* Hàm upload ảnh đại diện */
    function upload_avatar($path_save_file, $arr_extension_file, $uploaded_avatar)
    {
        $avatar_new_name = "";

        /* Lấy tên ảnh avatar người dùng upload lên */
        $avatar_extension = $uploaded_avatar->getClientOriginalExtension();

        /* Kiểm tra file ảnh của nguời dùng upload lên có đúng với file cho phép không*/
        if(isset($arr_extension_file[$avatar_extension]))
        {
            /* Tao ten file */
            $avatar_new_name = "namtp_avatar".time().rand(0000,9999).".$avatar_extension";
            
            echo $avatar_new_name.'<br>'.$path_save_file.'<br>';
            
            /* Luu file vao thu muc uploads/images */
            $upload_avatar = $uploaded_avatar->move($path_save_file, $avatar_new_name);
            if($upload_avatar === false) echo "Loi upload anh dai dien";
        }else{
            return redirect()->back()->withInput();
        }
        
        return $avatar_new_name;
    }
    /* end: function upload_avatar($array_file, $path_save_file) */

    /* Hàm upload ảnh bìa */
    function upload_cover_image($path_save_file, $arr_extension_file, $uploaded_cover_image)
    {
        $cover_image_extension = $uploaded_cover_image->getClientOriginalExtension();

        $cover_image_new_name = "";
        if(isset($arr_extension_file[$cover_image_extension]))
        {
            /* Tao ten file */
            $cover_image_new_name = "namtp_anhbia".time().rand(0000,9999).".$cover_image_extension";
            
            /* Luu file vao thu muc uploads/images */
            $upload_cover_image = $uploaded_cover_image->move($path_save_file, $cover_image_new_name);
            if($upload_cover_image === false) echo "Loi upload anh bia";
        }else{
            return redirect()->back()->withInput();
        }
        return $cover_image_new_name;
    }
    /* end: function upload_cover_image($array_file, $path_save_file) */
}
