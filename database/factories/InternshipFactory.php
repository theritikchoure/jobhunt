<?php

namespace Database\Factories;

use App\Models\Internship;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternshipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Internship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employer_id' => $this->faker->numberBetween(23,40),
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(2),
            'category' => $this->faker->sentence(3, false),
            'salary' => $this->faker->randomNumber(5, true),
            'openings' => $this->faker->randomDigit(),
            'duration' => $this->faker->randomDigit(),
            'last_date' => $this->faker->date(),
            'status' => $this->faker->numberBetween(0,2),
        ];
    }
}
