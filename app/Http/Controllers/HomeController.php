<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function home()
    {
        $post = DB::table('posts')
            ->where('posts.status', 1)
            ->join('users','posts.id_user', '=', 'users.id')
            ->join('categories','posts.id_cat', '=', 'categories.id')
            ->select('posts.*', 'users.fullname as user_fname', 'users.avatar as user_avatar', 'categories.name as cat_name', 'categories.uid as cat_uid', 'categories.url_key as cat_urlkey')
            ->orderBy('posts.id', 'DESC')
            ->get()->toArray();
        return view("home", ['post'=>$post]);
    }
}
