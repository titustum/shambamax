<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
     public function run()
    {
        $categories = [
            'Tractors',
            'Rollers',
            'Harvesters',
            'Ploughs',
            'Seeders',
            'Sprayers',
            'Irrigation Systems',
            'Tillers',
            'Other'
        ];

        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'image' => null
            ]);
        }
    }
}

