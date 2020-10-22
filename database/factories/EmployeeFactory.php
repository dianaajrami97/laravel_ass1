<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'officeCode' => $this->faker->numberBetween(1, 10),
            'reportsTo' => $this->faker->numberBetween(1, 50),
            'lastName' => $this->faker->lastName,
            'firstName' => $this->faker->firstName,
            'extension' => $this->faker->title,
            'email' => $this->faker->safeEmail,
            'jobTitle' => $this->faker->suffix,
            'created_at' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years', $timezone = null),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '-1 years', $timezone = null),
        ];
    }
}
