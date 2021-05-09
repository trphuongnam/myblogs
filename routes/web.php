<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;


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