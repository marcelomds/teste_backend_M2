<?php

namespace Database\Seeders;

use App\Models\Campaign\Campaign;
use Illuminate\Database\Seeder;

class CampaignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campaign::factory(10)->create();
    }
}
