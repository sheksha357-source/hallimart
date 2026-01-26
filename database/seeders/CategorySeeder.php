<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'sort_order' => 1],
            ['name' => 'Fashion', 'sort_order' => 2],
            ['name' => 'Groceries', 'sort_order' => 3],
            ['name' => 'Home & Kitchen', 'sort_order' => 4],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
