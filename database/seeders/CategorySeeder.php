<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  Create 4 categories
        // \App\Models\Category::factory()->count(6)->create();
        $categories = [



            [
                "name" => "Fast Food",
                "slug" => "fast-food",
                "position" => 0,
                "is_active" => true,
                "locale" => "en",
                "parent_id" => null,
            ],
            [
                "name" => "Restaurant",
                "slug" => "restaurant",
                "position" => 0,
                "is_active" => true,
                "locale" => "en",
                "parent_id" => null,
            ],
            [
                "name" => "Pizza",
                "slug" => "pizza",
                "position" => 0,
                "is_active" => true,
                "locale" => "en",
                "parent_id" => null,
            ],
            [
                "name" => "Coffee",
                "slug" => "coffee",
                "position" => 0,
                "is_active" => true,
                "locale" => "en",
                "parent_id" => null,
            ],

        ];

        foreach ($categories as $category) {
            $this->createCategory($category);
        }
    }

    private function createCategory($category)
    {
        $new = Category::create([
            'name' => $category['name'],
            'slug' => $category['slug'],
            'position' => $category['position'],
            'is_active' => $category['is_active'],
            'locale' => $category['locale'],
            'parent_id' => $category['parent_id'],
        ]);

        if (isset($category['children']) && count($category['children'])) {
            foreach ($category['children'] as $child) {
                $this->createChildCategory($child, $new);
            }
        }
    }

    private function createChildCategory($child, $category)
    {
        echo $category->id;
        $child = Category::create([
            'name' => $child['name'],
            'slug' => $child['slug'],
            'position' => $child['position'],
            'is_active' => $child['is_active'],
            'locale' => $child['locale'],
            'parent_id' => $category->id,
        ]);
    }
}
