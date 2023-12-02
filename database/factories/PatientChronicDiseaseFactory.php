<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\PatientChronicDisease;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PatientChronicDiseaseFactory extends Factory
{
    protected $model = PatientChronicDisease::class;

    public function definition(): array
    {
        return [
            'disease_name' => $this->faker->name(),
            'illness_date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'patient_id' => Patient::factory(),
            'created_by' => User::factory(),
        ];
    }
}
