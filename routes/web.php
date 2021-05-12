<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Kernel;

/* Begin: Route Phần Publics */
Route::get('/', 'App\Http\Controllers\HomeController@home');
/* End: Route Phần Publics */

/* Begin: Route phần Admin */
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view("admin/pages/dashboard");
    })->middleware("checkLogin");

    /* Begin: Route của phần bài viết */
    Route::get('/post', function () {
        return view("admin/pages/post");
    })->middleware("checkLogin");
    Route::get('/post/add', function () {
        return view("admin/pages/post_add");
    })->middleware("checkLogin");
    Route::get('/post/edit/{post_key}', function () {
        return view("admin/pages/post_edit");
    })->middleware("checkLogin");
    Route::get('/post/del/{post_key}', function () {
        return view("admin/pages/post_edit");
    })->middleware("checkLogin");
    /* End: Route của phần bài viết */

    /* Begin: Route của phần chủ đề bài viết */
    Route::get('/cat', 'App\Http\Controllers\Admin\CatController@index')->middleware("checkLogin");
    Route::get('/cat/add', 'App\Http\Controllers\Admin\CatController@add')->middleware("checkLogin");
    Route::post('/cat/save', 'App\Http\Controllers\Admin\CatController@save')->middleware("checkLogin");
    Route::get('/cat/edit/{cat_key}', 'App\Http\Controllers\Admin\CatController@edit')->middleware("checkLogin");
    Route::post('/cat/update', 'App\Http\Controllers\Admin\CatController@update')->middleware("checkLogin");
    Route::get('/cat/del/{cat_key}', 'App\Http\Controllers\Admin\CatController@del')->middleware("checkLogin");
    /* End: Route của phần chủ đề bài viết */

    /* End: Route của phần bình luận bài viết */
    Route::get('/post-comment', function () {
        return view("admin/pages/post_comment");
    })->middleware("checkLogin");
    /* End: Route của phần bình luận bài viết */

    /* Begin: Route của phần bài viết giới thiệu */
    Route::get('/about', function () {
        return view("admin/pages/about");
    })->middleware("checkLogin");
    Route::get('/about/add', function () {
        return view("admin/pages/about_add");
    })->middleware("checkLogin");
    Route::get('/about/edit/{about_key}', function () {
        return view("admin/pages/about_edit");
    })->middleware("checkLogin");
    Route::get('/about/del/{about_key}', function () {
        return view("admin/pages/about_edit");
    })->middleware("checkLogin");
    /* End: Route của phần bài viết giới thiệu*/

    /* Begin: Route của phần quản lý user */
    Route::get('/user', function () {
        return view("admin/pages/user");
    })->middleware("checkLogin");
    Route::get('/user/add', function () {
        return view("admin/pages/user_add");
    })->middleware("checkLogin");
    Route::get('/user/edit/{user_key}', function () {
        return view("admin/pages/user_edit");
    })->middleware("checkLogin");
    Route::get('/user/del/{user_key}', function () {
        return view("admin/pages/user_edit");
    })->middleware("checkLogin");
    /* End: Route của phần quản lý user*/

    /* Begin: Route của phần quản lý website info */
    Route::get('/webinfo', 'App\Http\Controllers\Admin\WebinfoController@index')->middleware("checkLogin");
    Route::get('/webinfo/add', 'App\Http\Controllers\Admin\WebinfoController@add')->middleware("checkLogin");
    Route::post('/webinfo/save', 'App\Http\Controllers\Admin\WebinfoController@save')->middleware("checkLogin");
    Route::get('/webinfo/edit/{key}', 'App\Http\Controllers\Admin\WebinfoController@edit')->middleware("checkLogin");
    Route::post('/webinfo/update', 'App\Http\Controllers\Admin\WebinfoController@update')->middleware("checkLogin");
    Route::get('/webinfo/del/{key}', 'App\Http\Controllers\Admin\WebinfoController@del')->middleware("checkLogin");
    /* End: Route của phần quản lý website info */
});
/* End: Route phần Admin */


/* Begin: Route login admin */
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name("login");
Route::post('/login/checklogin', 'App\Http\Controllers\LoginController@login');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');

/* End: Route login admin */

Route::get('/regist', function(){
    return view("login/pages/register");
});