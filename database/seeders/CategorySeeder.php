<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Tops',
            'Bottoms',
            'Dresses',
            'Outwear',
            'Sleepwear',
            'Underwear',
            'Swimwear',
            'Shoes',
            'Accessories',
            'Bags and Backpacks',
            'Workwear',
            'Baby clothing',
            'Special Occasion'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'name_ru' => $category->nullable(),
            ]);
        }
    }
}
