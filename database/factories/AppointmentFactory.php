<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\ClinicSchedule;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;

    public function definition(): array
    {
        return [
            'start_time' => Carbon::now(),
            'expected_end_time' => Carbon::now()->addMinutes(30),
            'end_time' => Carbon::now()->addMinutes(28),
            'total_price' => $this->faker->randomNumber(4),
            'discount' => $this->faker->numberBetween(0, 100),
            'is_cancelled' => $this->faker->boolean(),
            'cancellation_reason' => $this->faker->word(),
            'type' => $this->faker->randomElement(['examination', 'follow_up', 'work']),

            'clinic_schedule_id' => ClinicSchedule::all()->random()->id,
            'patient_id' => Patient::all()->random()->id,
            'created_by' => User::first()->id,
        ];
    }
}
