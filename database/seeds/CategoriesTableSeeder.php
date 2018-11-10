<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Portables', 'slug' => 'portables', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ordinateurs', 'slug' => 'ordinateurs', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mobiles', 'slug' => 'mobiles', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gaming', 'slug' => 'gaming', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
