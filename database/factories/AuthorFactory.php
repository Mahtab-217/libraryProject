<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
<<<<<<< HEAD
            "name"=> $this->faker->name(),
            "bio"=> $this->faker->paragraph(),
            "nationality"=> $this->faker->colorName(),
=======
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
        ];
    }
}
