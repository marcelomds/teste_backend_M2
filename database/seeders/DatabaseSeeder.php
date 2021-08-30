<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GroupCityTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(ProductDiscountTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CampaignTableSeeder::class);
    }
}
