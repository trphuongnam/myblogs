<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostPublicController extends Controller
{
    /* Hiển thị chi tiêt bài viết */
    function detail($url_key)
    {
        $arr_url = explode("-", $url_key);
        $uid_post = $arr_url[count($arr_url)-1];
        
        $post = DB::table('posts')
                ->join('users','posts.id_user', '=', 'users.id')
                ->join('categories','posts.id_cat', '=', 'categories.id')
                ->select('posts.id','posts.uid', 'posts.name', 'posts.description', 'posts.content', 'posts.image','posts.created_at', 'users.fullname as user_fname', 'users.avatar as user_avatar', 'categories.name as cat_name', 'categories.uid as cat_uid', 'categories.url_key as cat_urlkey')
                ->get()->toArray();

        return view('post_detail')->with('post', $post);
    }
}
