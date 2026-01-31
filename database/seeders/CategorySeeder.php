<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Animal',
                'slug' => Str::slug('Animal'),
                'description' => 'All animal related products',
                'icon' => 'animal.png',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fruits',
                'slug' => Str::slug('Fruits'),
                'description' => 'Fresh fruits category',
                'icon' => 'fruits.png',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adike',
                'slug' => Str::slug('Adike'),
                'description' => 'Adike products',
                'icon' => 'adike.png',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Grocery',
                'slug' => Str::slug('Grocery'),
                'description' => 'Daily grocery items',
                'icon' => 'grocery.png',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Other',
                'slug' => Str::slug('Other'),
                'description' => 'Other miscellaneous items',
                'icon' => 'other.png',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
