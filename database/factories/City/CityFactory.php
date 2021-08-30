<?php

namespace Database\Factories\City;

use App\Models\City\City;
use App\Models\City\GroupCity;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique->city(),
            'uf' => $this->faker->regexify('[A-Z]{' . mt_rand(2,2) . '}'),
            'group_city_id' => GroupCity::all()->random()->id
        ];
    }
}
