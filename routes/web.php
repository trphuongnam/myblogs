<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Kernel;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\WebinfoController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PostController;

/* Begin: Route Phần Publics */
Route::get('/', 'App\Http\Controllers\HomeController@home')->name("home_page");
Route::get('/post/{url_key}', 'App\Http\Controllers\PostPublicController@detail')->name("post_detail");
Route::post('/post/comment', 'App\Http\Controllers\PostPublicController@post_comment')->name("post_comment");
Route::get('/post/show_comment/{uid_post}', 'App\Http\Controllers\PostPublicController@show_comment')->name("show_comment");
/* End: Route Phần Publics */

/* Begin: Route phần Admin */
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view("admin/pages/dashboard");
    })->middleware("checkLogin");

    /* Begin: Route của phần bài viết */
    Route::get('/post', [PostController::class, 'index'])->name("index_post")->middleware("checkLogin");
    Route::get('/post/p/{url_key}', [PostController::class, 'detail'])->name("detail_post")->middleware("checkLogin");
    Route::get('/post/add', [PostController::class, 'add'])->name("add_post")->middleware("checkLogin");
    Route::post('/post/save', [PostController::class, 'save'])->name("save_post")->middleware("checkLogin");
    Route::get('/post/edit/{post_key}', [PostController::class, 'edit'])->name("edit_post")->middleware("checkLogin");
    Route::post('/post/update', [PostController::class, 'update'])->name("update_post")->middleware("checkLogin");
    Route::get('/post/del/{post_key}', [PostController::class, 'del'])->name("del_post")->middleware("checkLogin");
    /* End: Route của phần bài viết */

    /* Begin: Route của phần chủ đề bài viết */
    Route::get('/cat', [CatController::class, 'index'])->middleware("checkLogin");
    Route::get('/cat/add', [CatController::class, 'add'])->middleware("checkLogin");
    Route::post('/cat/save', [CatController::class, 'save'])->middleware("checkLogin");
    Route::get('/cat/edit/{cat_key}', [CatController::class, 'edit'])->middleware("checkLogin");
    Route::post('/cat/update', [CatController::class, 'update'])->middleware("checkLogin");
    Route::get('/cat/del/{cat_key}', [CatController::class, 'del'])->middleware("checkLogin");
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
    Route::get('/webinfo', [WebinfoController::class, 'index'])->middleware("checkLogin");
    Route::get('/webinfo/add', [WebinfoController::class, 'add'])->middleware("checkLogin");
    Route::post('/webinfo/save', [WebinfoController::class, 'save'])->middleware("checkLogin");
    Route::get('/webinfo/edit/{key}', [WebinfoController::class, 'edit'])->middleware("checkLogin");
    Route::post('/webinfo/update', [WebinfoController::class, 'update'])->middleware("checkLogin");
    Route::get('/webinfo/del/{key}', [WebinfoController::class, 'del'])->middleware("checkLogin");
    /* End: Route của phần quản lý website info */

    /* Begin: Route phần profile user */
    Route::get('/profile/{url_key}', [UserController::class, 'profile'])->name('profile')->middleware("checkLogin");
    Route::post('/profile/update', [UserController::class, 'update'])->name('update')->middleware("checkLogin");
    Route::post('/profile/update_avatar', [UserController::class, 'update_avatar'])->name('update_avatar')->middleware("checkLogin");
    /* End:  Route phần profile user*/
});
/* End: Route phần Admin */


/* Begin: Route login admin */
Route::get('/admin/login', [LoginController::class, 'index'])->name("login");
Route::post('/admin/login/checklogin', [LoginController::class, 'login']);
Route::get('/admin/logout', [LoginController::class, 'logout']);
Route::get('/admin/pass-reset', [LoginController::class, 'reset'])->name('reset_pass');
Route::post('/admin/pass-reset/checkreset', [LoginController::class, 'checkReset']);
/* End: Route login admin */

/* Begin: Route regist user */
Route::get('/regist', function(){
    return view("login/pages/register");
});
/* End: Route regist user */