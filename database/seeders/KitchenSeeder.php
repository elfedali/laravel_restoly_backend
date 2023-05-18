<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KitchenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kitchens = [
            [
                "name" => "Italian",
                "slug" => "italian",
                "description" => "Italian Food",
                "is_active" => true,
                "language" => "en",
            ],
            [
                "name" => "Moroccan",
                "slug" => "moroccan",
                "description" => "Moroccan Food",
                "is_active" => true,
                "language" => "en",
            ],
            [
                "name" => "French",
                "slug" => "french",
                "description" => "French Food",
                "is_active" => true,
                "language" => "en",
            ],
            [
                "name" => "Chinese",
                "slug" => "chinese",
                "description" => "Chinese Food",
                "is_active" => true,
                "language" => "en",
            ],
            [
                "name" => "Japanese",
                "slug" => "japanese",
                "description" => "Japanese Food",
                "is_active" => true,
                "language" => "en",
            ],
            [
                "name" => "Indian",
                "slug" => "indian",
                "description" => "Indian Food",
                "is_active" => true,
                "language" => "en",
            ],
            [
                "name" => "Thai",
                "slug" => "thai",
                "description" => "Thai Food",
                "is_active" => true,
                "language" => "en",
            ],
            [
                "name" => "Mexican",
                "slug" => "mexican",
                "description" => "Mexican Food",
                "is_active" => true,
                "language" => "en",
            ],
            [
                "name" => "Lebanese",
                "slug" => "lebanese",
                "description" => "Lebanese Food",
                "is_active" => true,
                "language" => "en",
            ],
        ];

        $kitchens_fr = [
            [
                "name" => "Italien",
                "slug" => "italian_fr",
                "description" => "Cuisine italienne",
                "is_active" => true,
                "language" => "fr",
            ],
            [
                "name" => "Marocain",
                "slug" => "moroccan_fr",
                "description" => "Cuisine marocaine",
                "is_active" => true,
                "language" => "fr",
            ],
            [
                "name" => "Français",
                "slug" => "french_fr",
                "description" => "Cuisine française",
                "is_active" => true,
                "language" => "fr",
            ],
            [
                "name" => "Chinois",
                "slug" => "chinese_fr",
                "description" => "Cuisine chinoise",
                "is_active" => true,
                "language" => "fr",
            ],
            [
                "name" => "Japonais",
                "slug" => "japanese_fr",
                "description" => "Cuisine japonaise",
                "is_active" => true,
                "language" => "fr",
            ],
            [
                "name" => "Indien",
                "slug" => "indian_fr",
                "description" => "Cuisine indienne",
                "is_active" => true,
                "language" => "fr",
            ],
            [
                "name" => "Thaï",
                "slug" => "thai_fr",
                "description" => "Cuisine thaïlandaise",
                "is_active" => true,
                "language" => "fr",
            ],
            [
                "name" => "Mexicain",
                "slug" => "mexican_fr",
                "description" => "Cuisine mexicaine",
                "is_active" => true,
                "language" => "fr",
            ],
            [
                "name" => "Libanais",
                "slug" => "lebanese_fr",
                "description" => "Cuisine libanaise",
                "is_active" => true,
                "language" => "fr",
            ],
        ];

        $kitchens_ar = [
            [
                "name" => "إيطالي",
                "slug" => "italian_ar",
                "description" => "طعام إيطالي",
                "is_active" => true,
                "language" => "ar",
            ],
            [
                "name" => "مغربي",
                "slug" => "moroccan_ar",
                "description" => "طعام مغربي",
                "is_active" => true,
                "language" => "ar",
            ],
            [
                "name" => "فرنسي",
                "slug" => "french_ar",
                "description" => "طعام فرنسي",
                "is_active" => true,
                "language" => "ar",
            ],
            [
                "name" => "صيني",
                "slug" => "chinese_ar",
                "description" => "طعام صيني",
                "is_active" => true,
                "language" => "ar",
            ],
            [
                "name" => "ياباني",
                "slug" => "japanese_ar",
                "description" => "طعام ياباني",
                "is_active" => true,
                "language" => "ar",
            ],
            [
                "name" => "هندي",
                "slug" => "indian_ar",
                "description" => "طعام هندي",
                "is_active" => true,
                "language" => "ar",
            ],
            [
                "name" => "تايلاندي",
                "slug" => "thai_ar",
                "description" => "طعام تايلاندي",
                "is_active" => true,
                "language" => "ar",
            ],
            [
                "name" => "مكسيكي",
                "slug" => "mexican_ar",
                "description" => "طعام مكسيكي",
                "is_active" => true,
                "language" => "ar",
            ],
            [
                "name" => "لبناني",
                "slug" => "lebanese_ar",
                "description" => "طعام لبناني",
                "is_active" => true,
                "language" => "ar",
            ],
        ];


        foreach ($kitchens as $kitchen) {
            \App\Models\Kitchen::create($kitchen);
        }

        foreach ($kitchens_fr as $kitchen) {
            \App\Models\Kitchen::create($kitchen);
        }

        foreach ($kitchens_ar as $kitchen) {
            \App\Models\Kitchen::create($kitchen);
        }
    }
}
