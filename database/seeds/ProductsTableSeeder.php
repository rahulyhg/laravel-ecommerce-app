<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Laptops
        for ($i = 1; $i < 16; $i++) {
            Product::create([
                'name' => 'Laptop ' . $i,
                'slug' => 'laptop-' . $i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])] . ' pouces ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
                'price' => rand(149999, 249999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet consectetur adipisicing elit. Magnam quas distinctio ea dolor, eaque sed molestias nam architecto doloremque nulla.',
            ])->categories()->attach(1);
        }

        $product = Product::find(1);
        $product->categories()->attach(4);

        // Desktops
        for ($i = 1; $i < 11; $i++) {
            Product::create([
                'name' => 'Desktop ' . $i,
                'slug' => 'desktop-' . $i,
                'details' => [24, 25, 27][array_rand([24, 25, 27])] . ' pouces ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
                'price' => rand(249999, 449999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet consectetur adipisicing elit. Magnam quas distinctio ea dolor, eaque sed molestias nam architecto doloremque nulla.',
            ])->categories()->attach(2);
        }

        // Mobiles
        for ($i = 1; $i < 6; $i++) {
            Product::create([
                'name' => 'Mobile ' . $i,
                'slug' => 'mobile-' . $i,
                'details' => [10, 11, 13][array_rand([10, 11, 13])] . ' pouces ' . [1, 2, 3][array_rand([1, 2, 3])] . ' IOS, 8GB RAM',
                'price' => rand(79999, 89999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet consectetur adipisicing elit. Magnam quas distinctio ea dolor, eaque sed molestias nam architecto doloremque nulla.',
            ])->categories()->attach(3);
        }
    }
}
