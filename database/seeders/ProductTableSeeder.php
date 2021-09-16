<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use File;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        $products =  [
            [
                'name' => 'Bayi',
                'price' => '19900',
                'sale_price' => '14900',
                'user_count' => '938',
                'features' => File::get("database/data/bayi.json"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pelajar',
                'price' => '46000',
                'sale_price' => '23450',
                'user_count' => '4168',
                'features' => File::get("database/data/pelajar.json"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Personal',
                'price' => '58900',
                'sale_price' => '38900',
                'user_count' => '10017',
                'features' => File::get("database/data/personal.json"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bisnis',
                'price' => '109900',
                'sale_price' => '65900',
                'user_count' => '3552',
                'features' => File::get("database/data/bisnis.json"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
          ];

          Product::insert($products);
    }
}