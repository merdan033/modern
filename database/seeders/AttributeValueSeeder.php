<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            ['name' => 'Color', 'values' => ['White', 'Black', 'Red', 'Green', 'Blue']],
            ['name' => 'Size', 'values' => ['Small', 'Medium', 'Large', 'XL']]
            ['name' => 'Material', 'values' => ['Cotton', 'Polyester', 'Linen', 'Wool']]
            ['name' => 'Style', 'values' => ['Casual', 'Formal', 'Sportswear', 'Business Casual']]
            ['name' => 'Pattern', 'values' => ['Striped', 'Solid', 'Floral', ' Checkered']]
            ['name' => 'Neckline', 'values' => ['V-neck', 'Round neck', 'Crew neck', ' Off-shoulder']]
            ['name' => 'Sleeve Length', 'values' => ['Short sleeve', 'Long sleeve', 'Sleeveless']]
            ['name' => 'Season', 'values' => ['Summer', 'Winter', 'Spring', ' Fall', 'All-season']]
            ['name' => 'Gender', 'values' => ["Men's", "Women's", "Unisex", "Child's"]]
        ];

        for ($i = 0; $i < count($attributes); $i++) {
            $attribute = $attributes[$i];

            $obj = Attribute::create([
                'name' => $attribute['name'],
                'name_ru' => $attribute['name_ru']->nullable(),
                'sort_order' => $i + 1,
            ]);

            for ($j = 0; $j < count($attribute['values']); $j++) {
                $value = $attribute['values'][$j];

                AttributeValue::create([
                    'attribute_id' => $obj->id,
                    'name' => $value,
                    'name_ru' => $value->nullable(),
                    'sort_order' => $j + 1,
                ]);
            }
        }
    }
}
