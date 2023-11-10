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
        $genders = [
            'Men',
            'Women',
            'Child',
        ];

        foreach ($genders as $gender) {
            Category::create([
                'name' => $gender,
                'name_ru' => $gender->nullable(),
            ]);
        }
    }
}
