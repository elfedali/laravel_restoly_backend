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
                'name' => 'Appliances',
                'slug' => 'appliances',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Apps & Games',
                'slug' => 'apps-games',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Arts, Crafts, & Sewing',
                'slug' => 'arts-crafts-&-sewing',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Automotive Parts & Accessories',
                'slug' => 'automotive-parts-accessories',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Baby',
                'slug' => 'baby',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Beauty & Personal Care',
                'slug' => 'beauty-personal-care',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Books',
                'slug' => 'books',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Cell Phones & Accessories',
                'slug' => 'cell-phones-accessories',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Clothing, Shoes and Jewelry',
                'slug' => 'clothing-shoes-and-jewelry',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Collectibles & Fine Art',
                'slug' => 'collectibles-fine-art',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Computers',
                'slug' => 'computers',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Garden & Outdoor',
                'slug' => 'garden-outdoor',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Grocery & Gourmet Food',
                'slug' => 'grocery-gourmet-food',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Handmade',
                'slug' => 'handmade',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Health, Household & Baby Care',
                'slug' => 'health-household-baby-care',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Home & Kitchen',
                'slug' => 'home-kitchen',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Industrial & Scientific',
                'slug' => 'industrial-scientific',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Kindle',
                'slug' => 'kindle',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Luggage & Travel Gear',
                'slug' => 'luggage-travel-gear',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Movies & TV',
                'slug' => 'movies-tv',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Musical Instruments',
                'slug' => 'musical-instruments',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Office Products',
                'slug' => 'office-products',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Pet Supplies',
                'slug' => 'pet-supplies',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Premium Beauty',
                'slug' => 'premium-beauty',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Sports & Outdoors',
                'slug' => 'sports-outdoors',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Tools & Home Improvement',
                'slug' => 'tools-home-improvement',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Toys & Games',
                'slug' => 'toys-games',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Video Games',
                'slug' => 'video-games',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,

            ],
            [
                'name' => 'Restaurants',
                'slug' => 'restaurants',
                'position' => 0,
                'is_active' => true,
                'locale' => 'en',
                'parent_id' => null,
                'children' => [
                    [
                        "name" => "American",
                        "slug" => "american",
                        "position" => 0,
                        "is_active" => true,
                        "locale" => "en",
                        "parent_id" => null,
                    ],
                    [
                        "name" => "Asian",
                        "slug" => "asian",
                        "position" => 0,
                        "is_active" => true,
                        "locale" => "en",
                        "parent_id" => null,
                    ],
                    [
                        "name" => "Bakery",
                        "slug" => "bakery",
                        "position" => 0,
                        "is_active" => true,
                        "locale" => "en",
                        "parent_id" => null,
                    ],
                    [
                        "name" => "Barbecue",
                        "slug" => "barbecue",
                        "position" => 0,
                        "is_active" => true,
                        "locale" => "en",
                        "parent_id" => null,

                    ],
                    [
                        "name" => "Italian",
                        "slug" => "italian",
                        "position" => 0,
                        "is_active" => true,
                        "locale" => "en",
                        "parent_id" => null,
                    ],
                    [
                        "name" => "Mexican",
                        "slug" => "mexican",
                        "position" => 0,
                        "is_active" => true,
                        "locale" => "en",
                        "parent_id" => null,
                    ]
                ]

            ]
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
