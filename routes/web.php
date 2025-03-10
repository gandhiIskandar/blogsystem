<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/posts/{post:slug}', function (Post $post) { //route binding menggunakan field slug tanpa harus pakai fungsi filter
   // $post = Post::find($id);



    $title = "Post";

    return view('post', compact('post', 'title'));
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Blog",
        "posts" => Post::all()
    ]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
