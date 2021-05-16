<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        
        return view("admin/pages/post");
    }

    function add()
    {
        $category = Category::where('status', 1)->get()->toArray();
        return view("admin/pages/post_add")->with("category", $category);
    }
    
    function save(Request $request)
    {

    }

    function edit($url_key)
    {
        return view("admin/pages/post_edit");
    }

    function update(Request $request)
    {

    }

    function del()
    {

    }
}
