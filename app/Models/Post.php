<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{

  // protected $table = "posts" << variabel untuk nama tabel yang mau dituju

  protected $fillable = ["slug", "author", "title", "body"];

  // protected $with = ['author','category'];

  /** @use HasFactory<\Database\Factories\PostFactory> */
  use HasFactory;

  use HasUuids;


  public function author(): BelongsTo
  {

    return $this->belongsTo(User::class);
  }

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }


  public function scopeSearch(Builder $query, $filters)
  {

    //tidak tidak search maka return query biasa

    return $query->when($filters['search'] ?? false, fn($q, $search) =>
    $q->where('body', 'like', "%{$search}%")
      ->orWhere('title', 'like', "%{$search}%"))
//sytanx when untuk filter apakah ada request category atau tidak
      ->when(
        $filters['category'] ?? false,
        fn($q, $category) =>


        $q->whereHas('category',  fn($q) => $q->where('slug', $category))
      )
      
      ->when(
        $filters['author'] ?? false,
        fn($q, $author) =>


        $q->whereHas('author',  fn($q) => $q->where('username', $author))
      )
      ;
  }



  public static function find($id) //pakai uuid 
  {

    // return Arr::first(Post::all(), function ($post) use ($slug) {
    //     return $post['slug'] == $slug; //akan mengambil data post sesuai id yang di link
    // });

    //dibawah ini menggunakan arrow func

    $post = Arr::first(Post::all(), fn($post) => $post->id == $id);

    //if the post not found then abort to 404
    if (!$post) {
      abort(404);
    }

    return $post;
  }
}
