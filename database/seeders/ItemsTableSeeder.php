<?php

namespace Database\Seeders;
use App\Models\Item;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'Smartphone XYZ',
                'description' => 'Latest model with advanced features and great performance.',
                'price' => 999.99,
                'category' => 'Electronics',
                'brand' => 'TechBrand',
                'weight' => 0.5,
                'image' => 'path/to/smartphone_xyz_image.jpg'
            ],
            [
                'name' => 'Wireless Headphones ABC',
                'description' => 'Noise-cancelling wireless headphones with superior sound quality.',
                'price' => 199.99,
                'category' => 'Electronics',
                'brand' => 'AudioPlus',
                'weight' => 0.3,
                'image' => 'path/to/headphones_abc_image.jpg'
            ],
         
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}