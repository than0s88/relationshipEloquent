<?php

namespace Database\Factories;

use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuardianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Guardian::class;

    public function definition()
    {
        $gender = $this->faker->randomElement(['Male', 'Female']);

        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $gender,
            'birth_date' => $this->faker->date()
        ];
    }
}
