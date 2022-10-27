<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Land>
 */
class LandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'properties_id' => rand(1,40),
            'Cad_sign' => $this->faker->numerify('###########'),
            'size' => $this->faker->randomFloat(3,0,20),
            'Date_of_survey' => $this->faker->date()
        ];
    }
}
