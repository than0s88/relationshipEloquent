<?php

namespace Database\Factories;

use App\Models\Child;
use App\Models\Guardian;
use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Child::class;

    public function definition()
    {
        $gender = $this->faker->randomElement(['Male', 'Female']);

        return [
            'guardian_id' => Guardian::factory(),
            'school_id' => School::factory(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $gender,
            'birth_date' => $this->faker->date()
        ];
    }
}
