<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            AdminSeeder::class,
            GovernorateSeeder::class,
            RegionSeeder::class,
            ClinicSeeder::class,
            DoctorSeeder::class,
            ClinicScheduleSeeder::class,
            PatientSeeder::class,
            AppointmentSeeder::class,
        ]);
    }
}
