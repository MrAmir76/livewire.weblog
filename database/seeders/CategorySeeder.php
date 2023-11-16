<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::query()->create(['name' => 'پوشاک مردانه', 'slug' => 'men-clothing', 'has_children' => 1]);
        Category::query()->create(['name' => 'پوشاک زنانه', 'slug' => 'women-clothing', 'has_children' => 1]);
        Category::query()->create(['name' => 'پوشاک بچگانه', 'slug' => 'children-clothing']);

        Category::query()->create(['name' => 'شلوار مردانه', 'slug' => 'men-trousers', 'parent_id' => 1]);
        Category::query()->create(['name' => 'پیراهن مردانه', 'slug' => 'men-shirts', 'parent_id' => 1]);

        Category::query()->create(['name' => 'شلوار زنانه', 'slug' => 'women-trousers', 'parent_id' => 2]);
        Category::query()->create(['name' => 'پیراهن زنانه', 'slug' => 'women-shirts', 'parent_id' => 2]);
    }
}
