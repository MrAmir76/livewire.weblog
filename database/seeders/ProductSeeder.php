<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::factory(50)->create();

//        assign product to random category
        for ($product_id = 1; $product_id <= 50; $product_id += 1) {
            DB::table('category_products')->insert([
                'product_id' => $product_id,
                'category_id' => rand(3, 7)
            ]);
        }

        //change 6 product to offer product
        DB::table('products')->where('id', '<=', 6)
            ->update(['offer' => 1]);

        // change first product to vip
        Product::query()->first()->update(['vip' => 1]);


    }
}
