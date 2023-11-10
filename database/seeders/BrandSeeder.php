<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'BOSS'],
            ['name' => 'ASUS',],
            ['name' => 'MSI',],
            ['name' => 'DELL',],
            ['name' => 'LENOVO',],
            ['name' => 'HP',],
        ];

        foreach ($brands as $brand) {
                Brand::create([
                'name' => $brand['name'],
            ]);

            }
        }
}
