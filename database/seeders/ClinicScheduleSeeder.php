<?php

namespace Database\Seeders;

use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClinicScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $firstOfMonth = now()->startOfMonth();
        $lastOfMonth = now()->endOfMonth();
        $clinic = Clinic::first();
        $doctor = Doctor::first();
        $createdBy = User::first()->id;

        for ($day = $firstOfMonth; $day <= $lastOfMonth; $day->addDay()) {
            $clinic->schedules()->create([
                'doctor_id' => $doctor->id,
                'date' => $day,
                'start_time' => '17:00',
                'end_time' => '20:00',
                'created_by' => $createdBy,
            ]);
        }
    }
}
