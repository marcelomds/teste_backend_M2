<?php

namespace Database\Seeders;

use App\Models\City\City;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::factory(15)->create();
    }
}
