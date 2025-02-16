<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

    // eager loading dengan with
    $posts = Post::with(['author','category'])->latest()->get();

    return view('posts', ['title'=>'Blog', 'posts' => $posts ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single post', 'post' => $post]);

    }
);

Route::get('/authors/{user:username}', function (User $user) {

    $posts = $user->posts->load('category','author'); 

    return view('posts', ['title' => count($user->posts).' Artikels By ' . $user->name , 'posts' => $posts]);
}
);

Route::get('/categories/{category:slug}', function (Category $category) {

    $posts = $category->posts->load('category','author'); 

    return view('posts', ['title' => 'Articles in : '. $category->name, 'posts' => $posts]);
}
);


Route::get('/contact', function () {
    return view('contact',['title'=>'contact']);
});


