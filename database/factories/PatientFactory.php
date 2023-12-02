<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Region;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(['male', 'female']);
        return [
            'full_name' => $this->faker->name($gender),
            'birth_date' => $this->faker->dateTimeBetween('1960-01-01', '2012-01-01'),
            'gender' => $gender,
            'job' => $this->faker->jobTitle,
            'region_id' => Region::all()->random()->id,
            'created_by' => User::first()->id,

        ];
    }
}
