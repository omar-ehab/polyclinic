<?php

namespace Database\Seeders;

use App\Enums\GenderEnum;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@app.com',
            'password' => bcrypt('password'),
            'gender' => GenderEnum::MALE,
        ]);
        $adminRole = Role::findByName('admin');
        $adminRole->users()->attach($user->id);
    }
}
