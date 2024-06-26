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
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'type' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'created_at' => '2024-05-28 06:17:00',
            'updated_at' => '2024-05-28 06:17:00',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'user',
            'type' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'created_at' => '2024-05-28 06:17:00',
            'updated_at' => '2024-05-28 06:17:00',
        ]);
        
        \App\Models\Item::factory()->create([
            'name' => 'Wireless Headphones ABC',
            'description' => 'Noise-cancelling wireless headphones with superior sound quality.',
            'price' => 199.99,
            'category' => 'Electronics',
            'brand' => 'AudioPlus',
            'weight' => 0.3,
            'image' => 'path/to/headphones_abc_image.jpg',
            // 'name' => 'BR-471',
            // 'description' => 'Soviet APHE round mostly used in the IS-3 heavy tank.',
            // 'price' => '150.00€',
            // 'round_desc' => 'APHE - Armor-piercing high explosive shell',
            // 'caliber' => '122mm',
            // 'mass' => '25 kg',
            // 'explosive_type' => 'A-IX-2',
            // 'explosive_mass' => '160 g',
            // 'tnt' => '246.4 g',
            // 'fuze' => '1.2 m',
            // 'pen' => '205mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Smartphone XYZ',
            'description' => 'Latest model with advanced features and great performance.',
            'price' => 999.99,
            'category' => 'Electronics',
            'brand' => 'TechBrand',
            'weight' => 0.5,
            'image' => 'path/to/smartphone_xyz_image.jpg',
            // 'name' => '3BK12M',
            // 'description' => 'Soviet HEATFS round mostly used in the T-72 main battle tank.',
            // 'price' => '800.00€',
            // 'round_desc' => 'HEATFS - High explosive anti-tank fin stabilized shell',
            // 'caliber' => '125mm',
            // 'mass' => '19 kg',
            // 'explosive_type' => 'A-IX-1',
            // 'explosive_mass' => '1.65 kg',
            // 'tnt' => '2.06 kg',
            // 'fuze' => '0.05 m',
            // 'pen' => '440mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Smartwatch Pro',
            'description' => 'Advanced smartwatch with health monitoring and GPS.',
            'price' => 249.99,
            'category' => 'Electronics',
            'brand' => 'TechBrand',
            'weight' => 0.1,
            'image' => 'path/to/smartwatch_pro_image.jpg',
            // 'name' => 'PG-9',
            // 'description' => 'Soviet HEAT grenade mostly used in the BMP-1 infantry fighting vehicle.',
            // 'price' => '350.00€',
            // 'round_desc' => 'HEAT - Anti-tank grenade',
            // 'caliber' => '73mm',
            // 'mass' => '2.6 kg',
            // 'explosive_type' => 'A-IX-1',
            // 'explosive_mass' => '735 g',
            // 'tnt' => '918.75 g',
            // 'fuze' => '0.01 mm',
            // 'pen' => '300mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => '4K Ultra HD Smart TV',
            'description' => 'Large-screen TV with 4K resolution and smart functionality.',
            'price' => 1599.99,
            'category' => 'Electronics',
            'brand' => 'TechBrand',
            'weight' => 25.0,
            'image' => 'path/to/4k_smart_tv_image.jpg',
            // 'name' => '9M113',
            // 'description' => 'Soviet ATGM mostly used in the BMP-1 infantry fighting vehicle.',
            // 'price' => '1400.00€',
            // 'round_desc' => 'ATGM - Anti-tank guided missile',
            // 'caliber' => '135mm',
            // 'mass' => '14.5 kg',
            // 'explosive_type' => 'OKFOL',
            // 'explosive_mass' => '2.75 kg',
            // 'tnt' => '4.37 kg',
            // 'fuze' => '0.05 m',
            // 'pen' => '500mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Gaming Laptop',
            'description' => 'Powerful laptop designed for gaming enthusiasts.',
            'price' => 1999.99,
            'category' => 'Electronics',
            'brand' => 'TechBrand',
            'weight' => 2.5,
            'image' => 'path/to/gaming_laptop_image.jpg',
            // 'name' => '9M37M',
            // 'description' => 'Soviet SAM mostly used in the Strela-10 surface-to-air missile system.',
            // 'price' => '3000.00€',
            // 'round_desc' => 'SAM - Surface-to-air missile',
            // 'caliber' => '120mm',
            // 'mass' => '39.2 kg',
            // 'explosive_type' => 'A-IX-2',
            // 'explosive_mass' => '1.1 kg',
            // 'tnt' => '1.69 kg',
            // 'fuze' => '1 m',
            // 'pen' => '20mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Home Security Camera System',
            'description' => 'Complete security camera setup for home monitoring.',
            'price' => 399.99,
            'category' => 'Electronics',
            'brand' => 'TechBrand',
            'weight' => 1.0,
            'image' => 'path/to/security_camera_system_image.jpg',
            // 'name' => 'S-5K',
            // 'description' => 'Soviet rocket mostly used in helicopternpm run devs.',
            // 'price' => '800.00€',
            // 'round_desc' => 'Rocket - High explosive anti-tank',
            // 'caliber' => '60mm',
            // 'mass' => '3.64 kg',
            // 'explosive_type' => 'A-IX-1',
            // 'explosive_mass' => '0.37 kg',
            // 'tnt' => '0.465 kg',
            // 'fuze' => '1 mm',
            // 'pen' => '150mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Portable Power Bank',
            'description' => 'High-capacity power bank for charging devices on the go.',
            'price' => 79.99,
            'category' => 'Electronics',
            'brand' => 'TechBrand',
            'weight' => 0.3,
            'image' => 'path/to/power_bank_image.jpg',
        //     'name' => '9M17M',
        //     'description' => 'Soviet ATGM mostly used in helicopters.',
        //     'price' => '1500.00€',
        //     'round_desc' => 'ATGM - Anti-tank guided missile',
        //     'caliber' => '180mm',
        //     'mass' => '31.5 kg',
        //     'explosive_type' => 'HTA',
        //     'explosive_mass' => '3.6 kg',
        //     'tnt' => '4.32 kg',
        //     'fuze' => '50 mm',
        //     'pen' => '650mm',
         ]);

        \App\Models\Item::factory()->create([
            'name' => 'Robot Vacuum Cleaner',
            'description' => 'Smart robot vacuum with mapping and self-charging capabilities.',
            'price' => 299.99,
            'category' => 'Electronics',
            'brand' => 'TechBrand',
            'weight' => 5.0,
            'image' => 'path/to/robot_vacuum_image.jpg',
            // 'name' => 'M344A1',
            // 'description' => 'American HEAT grenade mostly used in the M50.',
            // 'price' => '700.00€',
            // 'round_desc' => 'HEAT - High explosive anti-tank',
            // 'caliber' => '106mm',
            // 'mass' => '7.96 kg',
            // 'explosive_type' => 'Composition B',
            // 'explosive_mass' => '1.26 kg',
            // 'tnt' => '1.65 kg',
            // 'fuze' => '0.01 mm',
            // 'pen' => '433mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Wireless Gaming Mouse',
            'description' => 'High-performance wireless mouse designed for gaming.',
            'price' => 79.99,
            'category' => 'Electronics',
            'brand' => 'TechBrand',
            'weight' => 0.2,
            'image' => 'path/to/gaming_mouse_image.jpg',
            // 'name' => 'M829A2',
            // 'description' => 'American APFSDS round mostly used in the Abrams tank.',
            // 'price' => '15000.00€',
            // 'round_desc' => 'APFSDS - Armor-piercing fin-stabilized discarding sabot',
            // 'caliber' => '120mm',
            // 'mass' => '4.92 kg',
            // 'explosive_type' => '',
            // 'explosive_mass' => '',
            // 'tnt' => '',
            // 'fuze' => '',
            // 'pen' => '629mm',
        ]);

        $this->call(ItemsTableSeeder::class);
    }
}
