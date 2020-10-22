<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'productLineId' => $this->faker->numberBetween(1, 20),
            'name' => $this->faker->domainWord,
            'scale' => $this->faker->numberBetween(1, 5000),
            'vendor' => $this->faker->name,
            'pdtDescription' => $this->faker->realText(100, 2),
            'qtyInStock' => $this->faker->numberBetween(1, 500),
            'buyPrice' => $this->faker->numberBetween(1, 200),
            'MSBR' => $this->faker->randomAscii,
            'created_at' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years', $timezone = null),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '-1 years', $timezone = null),
        ];
    }
}
