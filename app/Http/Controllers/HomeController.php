<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        $post = Post::orderBy("id", "DESC")->get();
        return view("home", ['post'=>$post]);
    }
}
