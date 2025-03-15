<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $colors = ['red','green','yellow'];
        $sentece = fake()->sentence(rand(1,2),false);
        return [
            'name'=>$sentece,
            'color'=>Arr::random($colors),
            'slug'=>Str::slug($sentece)
        ];
    }
}
