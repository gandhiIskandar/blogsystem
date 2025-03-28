<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/post/{post:slug}', function (Post $post) { //route binding menggunakan field slug tanpa harus pakai fungsi filter
   // $post = Post::find($id);



    $title = "Post";

    return view('post', compact('post', 'title'));
});


Route::get('/author/{user:username}', function (User $user) { 

    $posts = $user->posts->load('author','category');
 
     $title = count($posts). " Articles by $user->name";

 
     return view('posts', compact('posts', 'title'));
 });



Route::get('/posts', [PostController::class,'index'])->name('posts.index');

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
