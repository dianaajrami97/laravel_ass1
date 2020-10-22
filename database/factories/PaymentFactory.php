<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'checkNum' => 'd-' . $this->faker->unique()->numberBetween(1, 1000000),
            'customerId' => $this->faker->numberBetween(1, 50),
            'paymentDate' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '-1 years', $timezone = null),
            'amount' => $this->faker->numberBetween(1, 500),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years', $timezone = null),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '-1 years', $timezone = null),
        ];
    }
}
