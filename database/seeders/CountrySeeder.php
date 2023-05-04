<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $countries = [
            [
                "name" => "Morocco",
                "slug" => "morocco",
                "code" => "MA",
                "flag" => "https://restoly.ma/storage/flags/MA.png",
                "phone_code" => "+212",
                "currency" => "MAD",
                "currency_symbol" => "DH",
                "is_active" => true,

            ],
            [
                "name" => "Egypt",
                "slug" => "egypt",
                "code" => "EG",
                "flag" => "https://restoly.ma/storage/flags/EG.png",
                "phone_code" => "+20",
                "currency" => "EGP",
                "currency_symbol" => "EGP",
                "is_active" => false,
            ]
        ];

        foreach ($countries as $country) {
            \App\Models\Country::create($country);
        }
    }
}
