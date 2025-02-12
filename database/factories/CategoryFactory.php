<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class; 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name_category'=>fake()->sentence(),
            // 'author_id'=>User::factory(),
            'slug_category' =>Str::slug(fake()->sentence()),
            // 'body'=>fake()->text()
        ];
    }
}
