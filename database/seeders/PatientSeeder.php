<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\PatientChronicDisease;
use App\Models\PatientMedicine;
use App\Models\PatientSurgery;
use App\Models\Phone;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::factory(50)->create()->each(function ($patient) {
            Phone::factory()->create([
                'patient_id' => $patient->id,
                'created_by' => $patient->created_by,
            ]);
            PatientChronicDisease::factory(rand(0, 2))->create([
                'patient_id' => $patient->id,
                'created_by' => $patient->created_by,
            ]);
            PatientMedicine::factory(10)->create([
                'patient_id' => $patient->id,
                'created_by' => $patient->created_by,
            ]);
            PatientSurgery::factory(rand(0, 2))->create([
                'patient_id' => $patient->id,
                'created_by' => $patient->created_by,
            ]);
        });
    }
}
