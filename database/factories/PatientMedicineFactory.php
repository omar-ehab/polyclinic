<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\PatientMedicine;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PatientMedicineFactory extends Factory
{
    protected $model = PatientMedicine::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'patient_id' => Patient::factory(),
            'created_by' => User::factory(),
        ];
    }
}
