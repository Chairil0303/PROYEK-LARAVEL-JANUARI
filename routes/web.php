<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',['title'=>'home']);
});


Route::get('/about', function () {
    return view('about',['nama' => 'chairil bisa'], ['title'=>'about']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=>'Blog', 'posts' => Post::all() ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // return view('contact',['title'=>'contact']);
    
    // $post = Post::find($slug);

    
    return view('post', ['title' => 'Single post', 'post' => $post]);

}
);

Route::get('/contact', function () {
    return view('contact',['title'=>'contact']);
});


