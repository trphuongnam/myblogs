<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use function PHPSTORM_META\elementType;
use Illuminate\Support\Str;
use App\thuvien_xuly\strings;

class CatController extends Controller
{
    function index()
    {
        $arr_category = Category::orderBy('id')->get();
        return view("admin/pages/category", ['arr_category'=>$arr_category]);
    }

    function add()
    {
        return view("admin/pages/category_add");
    }

    public function save(Request $request)
    {
        $strings = new Strings();

        /* Kiểm tra dữ liệu người dùng nhập vào */
        $arr_data = [
            "name"=>"required|max:100",
            "description"=>"max:200",
            "status"=>"required"
        ];
        $arr_rule = [
            "name.required"=>"Tên chủ đề không được để trống",
            "name.max"=>"Tên chủ đề chỉ cho phép 100 ký tự",
            "description.max"=>"Mô tả tối đa 200 ký tự",
            "status.required"=>"Vui lòng chọn trạng thái cho chủ đề"
        ];
        $validate_data = $request->validate($arr_data, $arr_rule);
        
        if($validate_data == false) return redirect()->back();
        else{
            
            $category = new Category();
            $category->name = $request->name;
            $category->description = $request->description;
            $category->status = $request->status;
            $category->url_key = Str::slug($request->name, "-");
            $category->uid = $strings->rand_string(20);
            $category->level = 1;
            $category->str_id = 1;

            $cat_save = $category->save();
            if($cat_save == true) return redirect('/admin/cat')->with('save_success', "Lưu bài viết thành công");
            else redirect('/admin/cat/add')->with('save_error', 'Lỗi khi lưu. Vui lòng kiểm tra lại dữ liệu.');
        }
    }

    function edit()
    {
        return view("admin/pages/category_edit");
    }

    function update(Request $request)
    {

    }

    function del(Request $request)
    {

    }
}
