<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PhoneFactory extends Factory
{
    protected $model = Phone::class;

    public function definition(): array
    {
        $telecomCompanyCode = $this->faker->randomElement(['010', '011', '012', '015']);
        $randomNumber = $this->faker->numberBetween(10000000, 99999999);
        $phoneNumber = $telecomCompanyCode . $randomNumber;

        return [
            'number' => $phoneNumber,
            'type' => 'mobile',

            'patient_id' => Patient::factory(),
            'created_by' => User::factory(),
        ];
    }
}
