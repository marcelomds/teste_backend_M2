<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_discounts')->insert([
            [
                'id' => 1,
                'value' => 15.50
            ],
            [
                'id' => 2,
                'value' => 27.80
            ],
            [
                'id' => 3,
                'value' => 60.00
            ],
            [
                'id' => 4,
                'value' => 49.99
            ],
            [
                'id' => 5,
                'value' => 17.40
            ],
            [
                'id' => 6,
                'value' => 33.80
            ],
            [
                'id' => 7,
                'value' => 24.65
            ],
            [
                'id' => 8,
                'value' => 19.85
            ],
            [
                'id' => 9,
                'value' => 65.20
            ],
            [
                'id' => 10,
                'value' => 42.30
            ]
        ]);
    }
}
