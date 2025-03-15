<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){

       
        $filters = $request->only(['search', 'category', 'author']);

        $posts = Post::with('author','category')->search($filters)->paginate(12)->withQueryString(); //gunakan withquerystring agar request GET di url tidak hilang dan tetap dipertahankan ketika klik paginate

    
       $title = "Blog";



        return view('posts',compact('title','posts'));


    }

   
}
