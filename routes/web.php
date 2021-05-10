<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@home');

Route::get('lk1n', function(){
    $post = Category::find(1)->post->toArray();

    echo "<pre>";
    print_r($post);
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view("admin/pages/dashboard");
    });

    /* Begin: Route của phần bài viết */
    Route::get('/post', function () {
        return view("admin/pages/post");
    });
    Route::get('/post/add', function () {
        return view("admin/pages/post_add");
    });
    Route::get('/post/edit/{post_key}', function () {
        return view("admin/pages/post_edit");
    });
    Route::get('/post/del/{post_key}', function () {
        return view("admin/pages/post_edit");
    });
    /* End: Route của phần bài viết */

    /* Begin: Route của phần chủ đề bài viết */
    Route::get('/cat', 'App\Http\Controllers\Admin\CatController@index');
    Route::get('/cat/add', function () {
        return view("admin/pages/category_add");
    });
    Route::get('/cat/save', function () {
        return view("admin/pages/category_add");
    });
    Route::get('/cat/edit/{cat_key}', function () {
        return view("admin/pages/category_edit");
    });
    Route::get('/cat/del/{cat_key}', function () {
        return view("admin/pages/category_edit");
    });
    /* End: Route của phần chủ đề bài viết */

    /* End: Route của phần bình luận bài viết */
    Route::get('/post-comment', function () {
        return view("admin/pages/post_comment");
    });
    /* End: Route của phần bình luận bài viết */

    /* Begin: Route của phần bài viết giới thiệu */
    Route::get('/about', function () {
        return view("admin/pages/about");
    });
    Route::get('/about/add', function () {
        return view("admin/pages/about_add");
    });
    Route::get('/about/edit/{about_key}', function () {
        return view("admin/pages/about_edit");
    });
    Route::get('/about/del/{about_key}', function () {
        return view("admin/pages/about_edit");
    });
    /* End: Route của phần bài viết giới thiệu*/

    /* Begin: Route của phần quản lý user */
    Route::get('/user', function () {
        return view("admin/pages/user");
    });
    Route::get('/user/add', function () {
        return view("admin/pages/user_add");
    });
    Route::get('/user/edit/{user_key}', function () {
        return view("admin/pages/user_edit");
    });
    Route::get('/user/del/{user_key}', function () {
        return view("admin/pages/user_edit");
    });
    /* End: Route của phần quản lý user*/
});