<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'salesRepEmployeeNum' => $this->faker->numberBetween(1, 50),
            'name' => $this->faker->name,
            'lastName' => $this->faker->lastName,
            'firstName' => $this->faker->firstName,
            'phone' => $this->faker->phoneNumber,
            'address_1' => $this->faker->address,
            'address_2' => $this->faker->secondaryAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'creditLimit' => (int) $this->faker->numberBetween(1, 50000),
            'postalCode' => (int) $this->faker->postcode,
            'created_at' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years', $timezone = null),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '-1 years', $timezone = null),
        ];
    }
}
