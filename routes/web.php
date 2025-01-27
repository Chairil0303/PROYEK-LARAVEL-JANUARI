<?php

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
    return view('posts', ['title'=>'Blog', 'posts' => [
        [
            'title' => 'Judul artikel 1',
            'author' => 'Chairil syahrain',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt dolor autem, tempora Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, possimus totam.'
        ],
        [
            'title' => 'Judul artikel 2',
            'author' => 'Chairil syahrain',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt dolor autem, tempora Lorem ipsum dolor sit amet.'
        ]
    ] 
]);
});

Route::get('/contact', function () {
    return view('contact',['title'=>'contact']);
});
