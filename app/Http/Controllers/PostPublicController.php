<?php

namespace App\Http\Controllers;

use App\Models\PostComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\thuvien_xuly\strings;

class PostPublicController extends Controller
{
    /* Hiển thị chi tiêt bài viết */
    function detail($url_key)
    {
        $arr_url = explode("-", $url_key);
        $uid_post = $arr_url[count($arr_url)-1];
        
        $post = DB::table('posts')
                ->where('posts.uid', '=', $uid_post)
                ->join('users','posts.id_user', '=', 'users.id')
                ->join('categories','posts.id_cat', '=', 'categories.id')
                ->select('posts.*', 'users.fullname as user_fname', 'users.avatar as user_avatar', 'categories.name as cat_name', 'categories.uid as cat_uid', 'categories.url_key as cat_urlkey')
                ->get()->toArray();

        return view('post_detail')->with('post', $post);
    }

    function post_comment(Request $request)
    {
        $strings = new Strings();

        /* Kiem tra noi dung nhap len */
        $rule = [
            'name_person' => 'required|max:50',
            'email' => 'required|email',
            'content' => 'required'
        ];

        $msg = [
            'name_person.required' => 'Vui lòng nhập tên của bạn',
            'name_person.max' => 'Vui lòng nhập tên không quá 50 ký tự',
            'email.required' => 'Vui lòng nhập email của bạn',
            'email.email' => 'Email không đúng định dạng',
            'content.required' => 'Vui lòng nhập nội dung comment của bạn'
        ];

        $validate = $request->validate($rule, $msg);

        if($validate == false) return "Loi";
        else{

            $post = Post::where('uid', $request->uid_post)->select('id', 'url_key')->get()->toArray();
            
            $comment = new PostComment();
            $comment->content = $request->content;
            $comment->id_post = $post[0]['id'];
            $comment->status = 1;
            $comment->level = 1;
            $comment->str_id = 1;
            $comment->id_user = 1;
            $comment->name_person = $request->name_person;
            $comment->email = $request->email;
            $comment->website = $request->website;
            $comment->uid = $strings->rand_string(20);
            $comment->created_at = now();

            $comment->save();
            return $post[0]['url_key'].'-'.$request->uid_post;
        }
    }

    function show_comment($uid_post)
    {
        $post_id = Post::where('uid', $uid_post)->select('id')->get()->toArray();
        $comment_post = Post::find($post_id[0]['id'])->comment()->get()->toArray();

        return $comment_post;
    }
}
