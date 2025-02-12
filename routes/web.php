<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts).' Artikels By ' . $user->name , 'posts' => $user->posts]);
}
);

Route::get('/contact', function () {
    return view('contact',['title'=>'contact']);
});


