<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->string('slug')->unique();
            $table->string('title');
            $table->foreignId('category_id');
            $table->foreignId('author_id')->constrained(
                table: 'users', indexName: 'posts_author_id'
            ); $table->text('body');
            $table->uuid('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
