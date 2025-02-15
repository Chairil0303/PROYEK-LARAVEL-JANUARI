<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web Design'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'Machine Learning'
        ]);

        Category::create([
            'name' => 'Data Base',
            'slug' => 'Data Base'
        ]);

        Category::create([
            'name' => 'Artificial Intelegence',
            'slug' => 'Artificial Intelegence'
        ]);

        Category::create([
            'name' => 'Programing',
            'slug' => 'Programing'
        ]);
    }
}
