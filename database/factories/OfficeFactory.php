<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Office::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city' => $this->faker->city,
            'phone' => $this->faker->phoneNumber,
            'address_1' => $this->faker->address,
            'address_2' => $this->faker->secondaryAddress,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'postalCode' => (int) $this->faker->postcode,
            'territory' => $this->faker->streetSuffix,
            'created_at' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years', $timezone = null),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '-1 years', $timezone = null),
        ];
    }
}
