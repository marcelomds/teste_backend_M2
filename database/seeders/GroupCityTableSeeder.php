<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupCityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_cities')
            ->insert([
                [
                    'id' => 1,
                    'name' => 'Grupo 01'
                ],
                [
                    'id' => 2,
                    'name' => 'Grupo 02'
                ],
                [
                    'id' => 3,
                    'name' => 'Grupo 03'
                ],
                [
                    'id' => 4,
                    'name' => 'Grupo 04'
                ],
                [
                    'id' => 5,
                    'name' => 'Grupo 05'
                ]
            ]);
    }
}
