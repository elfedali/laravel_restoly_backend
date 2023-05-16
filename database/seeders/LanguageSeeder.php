<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            [
                "name" => "English",
                "slug" => "en",
                "is_active" => true,

            ],
            [
                "name" => "Français",
                "slug" => "fr",
                "is_active" => true,

            ],
            [
                "name" => "العربية",
                "slug" => "ar",
                "is_active" => true,

            ],
        ];

        foreach ($languages as $language) {
            \App\Models\Language::create($language);
        }
    }
}
