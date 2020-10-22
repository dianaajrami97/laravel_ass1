<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customerId' => $this->faker->numberBetween(1, 50),
            'orderDate' => $this->faker->dateTimeBetween($startDate = '-3 years', $endDate = '-1 years', $timezone = null),
            'requiredDate' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years', $timezone = null),
            'shippedDate' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years', $timezone = null),
            'status' => $this->faker->boolean,
            'comments' => $this->faker->realText(100),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years', $timezone = null),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '-1 years', $timezone = null),
        ];
    }
}
