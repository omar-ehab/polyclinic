<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'examination_session_period' => $this->faker->numberBetween(1, 30),
            'follow_up_session_period' => $this->faker->numberBetween(1, 20),
            'work_session_period' => $this->faker->numberBetween(1, 60),
            'notification_before_clinic_schedule' => $this->faker->boolean,
            'notification_before_every_appointment' => $this->faker->boolean,
            'email_notification' => $this->faker->boolean,
            'push_notification' => $this->faker->boolean,
            'speciality' => $this->faker->word,
            'supervisory_level' => $this->faker->word,
        ];
    }
}
