<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create  one profile
        $profile = \App\Models\Profile::factory()->create([
            'user_id' => 1,
            'first_name' => 'Mohamed',
            'last_name' => 'Elgharib',
            'phone' => '0600000000',
            'address' => 'Rue 1, Sidi Maarouf',
            'city' => 'Casablanca',
            'state' => null,
            'zip' => 90522,
            'country' => 'Morocco',
            'is_verified' => true,
            'is_active' => true,
            'phone_verification_code' => 'Mohamed Elgharib',
            'email_verification_code' => 'Mohamed Elgharib',
        ]);
    }
}
