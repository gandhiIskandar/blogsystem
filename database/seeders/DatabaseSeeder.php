<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::create([
            "slug"=>"post-pertama",
            "title"=>"Post Pertama",
            "author"=>"Alfath Gandhi",
            "body"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit.
     Cum ea repudiandae deserunt similique fugit. Placeat officiis nam, quod tempore voluptatibus veritatis sit nesciunt. Vero ut suscipit nulla consequatur natus exercitationem?
"
        ]);

        Post::create([
            "slug"=>"post-kedua",
            "title"=>"Post Kedua",
            "author"=>"Alfath Gandhi",
            "body"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit.
     Cum ea repudiandae deserunt similique fugit. Placeat officiis nam, quod tempore voluptatibus veritatis sit nesciunt. Vero ut suscipit nulla consequatur natus exercitationem?
"
        ]);



    }
}
