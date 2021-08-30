<?php

namespace Database\Factories\Campaign;

use App\Models\Campaign\Campaign;
use App\Models\City\GroupCity;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CampaignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Campaign::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => 'Campanha ' . Str::random(4),
            'product_id' => Product::all()->random()->id,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'group_city_id' => GroupCity::all()->random()->id
        ];
    }
}
