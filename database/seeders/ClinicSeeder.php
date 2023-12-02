<?php

namespace Database\Seeders;

use App\Models\Clinic;
use Illuminate\Database\Seeder;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clinic::create([
            'name' => 'Clinic 1',
        ]);

        Clinic::create([
            'name' => 'Clinic 2',
        ]);

        Clinic::create([
            'name' => 'Clinic 3',
        ]);

        Clinic::create([
            'name' => 'Clinic 4',
        ]);
    }
}
