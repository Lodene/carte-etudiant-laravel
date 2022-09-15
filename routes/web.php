<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    $post = Post::all();
    // ddd(Post::all()->first()->entreprise->name);
    return view('posts', [
        'posts' => $post
    ]);
});

Route::get('/post/{post:id}', function(Post $post){
    return view('post', [
        'post' => $post
    ]);
});