<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\thuvien_xuly\strings;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PostController extends Controller
{
    function index()
    {
        $post = Post::get()->toArray();
        return view("admin/pages/post")->with("post", $post);
    }

    function detail($url_key)
    {
        $arr_url_key = explode("-", $url_key);
        $uid = $arr_url_key[count($arr_url_key)-1];

        $data = Post::where('uid', $uid)->get()->toArray();
        if($data != null)
        { 
            return $data;
        }else{
            return "Không có dữ liệu !";
        }

    }

    function add()
    {
        $category = Category::where('status', 1)->get()->toArray();
        return view("admin/pages/post_add")->with("category", $category);
    }
    
    function save(Request $request)
    {
        $strings = new Strings();

        // Kiem tra du lieu nhap len
        $rule = [
            'category' => 'required',
            'name' => 'required',
            'description' => 'required|max:200',
            'content' => 'required'
        ];

        $msg = [
            'category.required'=>'Chủ đề không được để trống',
            'name.required'=>'Tên bài viết không được để trống',
            'description.required'=>'Mô tả không được để trống',
            'description.max'=>'Mô tả nhập tối đa 200 từ',
            'content.required'=>'Nội dung không được để trống'
        ];

        $validate = $request->validate($rule, $msg);

        $file_name = "";
        if($validate == true)
        {
            if($request->hasFile('image'))
            {
                $image = $request->file('image');

                $file_name = $this->upload_file($image, $request);
                
            }

            $post = new Post();
            $post->name = $request->name;
            $post->id_cat = $request->category;
            $post->description = $request->description;
            $post->content = $request->content;
            $post->image = $file_name;
            $post->url_key = Str::slug($request->name);
            $post->uid = $strings->rand_string(20);
            $post->status = $request->status;
            $post->id_user = Auth::user()->id;

            $save_post = $post->save();
            if($save_post) return redirect()->route('index_post')->with('post_success', 'Lưu bài viết thành công');
            else return redirect()->route('add_post')->withInput();
        }
        
    }

    function edit($url_key)
    {
        $arr_url_key = explode("-", $url_key);
        $uid = $arr_url_key[count($arr_url_key)-1];

        $category = Category::where('status', 1)->get()->toArray();
        $post = Post::where('uid', $uid)->get()->toArray();
        return view("admin/pages/post_edit")->with(["category"=>$category, "post"=>$post]);
    }

    function update(Request $request)
    {
        // Kiem tra du lieu nhap len
        $rule = [
            'category' => 'required',
            'name' => 'required',
            'description' => 'required|max:200',
            'content' => 'required'
        ];

        $msg = [
            'category.required'=>'Chủ đề không được để trống',
            'name.required'=>'Tên bài viết không được để trống',
            'description.required'=>'Mô tả không được để trống',
            'description.max'=>'Mô tả nhập tối đa 200 từ',
            'content.required'=>'Nội dung không được để trống'
        ];

        $validate = $request->validate($rule, $msg);

        $file_name = "";
        if($validate == true)
        {
            if($request->hasFile('image'))
            {
                $image = $request->file('image');

                $file_name = $this->upload_file($image, $request);
                
            }

            $post = Post::find($request->id);
            $post->name = $request->name;
            $post->id_cat = $request->category;
            $post->description = $request->description;
            $post->content = $request->content;
            if($file_name != "") $post->image = $file_name;
            $post->url_key = Str::slug($request->name);
            $post->status = $request->status;

            $save_post = $post->save();
            if($save_post) return redirect()->route('index_post')->with('post_success', 'Cập nhật bài viết '.$request->name.' thành công');
            else return redirect()->route('add_post')->withInput();
        }
    }

    function del($url_key)
    {
        $arr_url_key = explode("-", $url_key);
        $uid = $arr_url_key[count($arr_url_key)-1];

        $post = Post::where("uid", $uid)->delete();
    }

    /* Ham upload file anh */
    function upload_file($image, $req)
    {
        $arr_extension = ['jpeg'=>'jpeg', 'jpg'=>'jpg', 'gif'=>'gif', 'png'=>'png'];

        if($arr_extension[$image->getClientOriginalExtension()])
        {
            $new_name = "nt_post_".rand().".".$image->getClientOriginalExtension();
            $path_save = public_path("/uploads/images");
            $image->move($path_save, $new_name);
            return $new_name;
        }
    }
}
