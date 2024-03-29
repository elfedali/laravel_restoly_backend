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
        // // create  one profile
        // $profile = \App\Models\Profile::factory()->create([
        //     'user_id' => 1,
        //     'first_name' => 'Mohamed',
        //     'last_name' => 'Elgharib',
        //     'phone' => '0600000000',
        //     'address' => 'Rue 1, Sidi Maarouf',
        //     'city' => 'Casablanca',
        //     'zip' => 90522,
        //     'country' => 'Morocco',
        //     'is_verified' => true,
        //     'is_active' => true,
        //     'phone_verification_code' => 'Mohamed Elgharib',
        //     'email_verification_code' => 'Mohamed Elgharib',
        // ]);
        //edit the user ! profile
        $user = \App\Models\User::find(1);
        $user->profile()->update([
            'first_name' => 'Abdessamad',
            'last_name' => 'fdl',
            'phone' => '0627018957',
            'address' => null,
            'city' => null,
            'zip_code' => null,
            'country' => 'Morocco',
            'is_verified' => true,
            "avatar" => "avatars/WxMHAByk16HipRIWmFjjVspjtHyDQwKp1OCH68Af.jpg",
            'is_active' => true,
            'phone_verification_code' => null,
            'email_verification_code' => null,
        ]);
    }
}
