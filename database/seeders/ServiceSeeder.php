<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                "name" => "Delivery",
                "slug" => "delivery",
                "description" => "Delivery Service",
                "is_active" => true,
                "language" => "en",
            ],
            [
                "name" => "Takeaway",
                "slug" => "takeaway",
                "description" => "Takeaway Service",
                "is_active" => true,
                "language" => "en",
            ],
            [
                "name" => "Dine-in",
                "slug" => "dine-in",
                "description" => "Dine-in Service",
                "is_active" => true,
                "language" => "en",
            ],
        ];

        foreach ($services as $service) {
            \App\Models\Service::create($service);
        }
    }
}
