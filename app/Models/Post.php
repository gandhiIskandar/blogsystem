<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{

    // protected $table = "posts" << variabel untuk nama tabel yang mau dituju

    protected $fillable=["slug","author","title","body"];

   // protected $with = ['author','category'];

    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    use HasUuids;


    public function author(): BelongsTo {

      return $this->belongsTo(User::class);
    }

    public function category() : BelongsTo {
      return $this->belongsTo(Category::class);
    }



    public static function find($id) //pakai uuid 
    {

        // return Arr::first(Post::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug; //akan mengambil data post sesuai id yang di link
        // });

        //dibawah ini menggunakan arrow func

      $post = Arr::first(Post::all(), fn($post) => $post->id == $id);

      //if the post not found then abort to 404
      if(!$post){
        abort(404);
      }

      return $post;
    }

    }
