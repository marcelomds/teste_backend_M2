<?php

namespace Database\Factories\Product;

use App\Models\Product\Product;
use App\Models\Product\ProductDiscount;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Produto ' . Str::random(2),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'product_discount_id' => ProductDiscount::all()->random()->id
        ];
    }
}
