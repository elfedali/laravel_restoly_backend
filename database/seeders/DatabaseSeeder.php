<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            CountrySeeder::class,
        ]);

        \App\Models\User::factory()->create([
            'email' => 'webmaster@restoly.ma',
            'role' => 'super_admin',
        ]);


        \App\Models\User::factory()->create([
            'email' => 'admin@restoly.ma',
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'email' => 'subscriber@restoly.ma',
            'role' => 'subscriber',
        ]);


        $this->call([
            PageSeeder::class,
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

        $this->call([
            ProfileSeeder::class,
        ]);
    }
}
