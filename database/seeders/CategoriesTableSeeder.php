<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Delete all records from the categories table
         Category::query()->delete();
         DB::statement('ALTER TABLE categories AUTO_INCREMENT = 1');
        

        $categories = [
            ['name' => 'Seafood', 'image' => 'menu91.png'],
            ['name' => 'Soup', 'image' => 'menu92.png'],
            ['name' => 'Pancakes', 'image' => 'menu93.png'],
            ['name' => 'Meat', 'image' => 'menu94.png'],
            ['name' => 'Chicken', 'image' => 'menu95.png'],
            ['name' => 'Less than 30 min', 'image' => 'menu96.png'],
            ['name' => 'Pasta', 'image' => 'menu97.png'],
            ['name' => 'Pizza', 'image' => 'menu98.png'],
            ['name' => 'Cake', 'image' => 'menu99.png'],
            ['name' => 'Pastries', 'image' => 'menu100.png'],
            ['name' => 'Burger', 'image' => 'menu101.png'],
            ['name' => 'Vegan', 'image' => 'menu102.png'],
            ['name' => 'Desserts', 'image' => 'menu103.png'],
            ['name' => 'Smoothies', 'image' => 'menu104.png'],
            ['name' => 'Breakfast', 'image' => 'menu105.png'],
            ['name' => 'Salad', 'image' => 'menu106.png'],
            ['name' => 'Sandwiches', 'image' => 'menu107.png'],
            ['name' => 'Waffles', 'image' => 'menu108.png'],
            ['name' => 'Ramen', 'image' => 'menu109.png'],
            ['name' => 'Dips', 'image' => 'menu110.png'],
        ];

        DB::table('categories')->insert($categories);
    }
}
