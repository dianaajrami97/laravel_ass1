<?php

namespace Database\Factories;

use App\Models\ProductLine;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductLineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductLine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descInText' => $this->faker->realText(120, 2),
            'descInHtml' => '<html lang="en"><h3>' . $this->faker->realText($maxNbChars = 120, $indexSize = 2) . '</h3></html>',
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years', $timezone = null),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '-1 years', $timezone = null),
        ];
    }
}
