<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\PatientSurgery;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PatientSurgeryFactory extends Factory
{
    protected $model = PatientSurgery::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'date' => Carbon::now(),
            'surgeon' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'patient_id' => Patient::factory(),
            'created_by' => User::factory(),
        ];
    }
}
