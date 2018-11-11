<?php

use App\Coupon;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code' => '123',
            'type' => 'fixed',
            'value' => 1000,
        ]);

        Coupon::create([
            'code' => 'ABC',
            'type' => 'percent',
            'percent_off' => 5,
        ]);
    }
}
