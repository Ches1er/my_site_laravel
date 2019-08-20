<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_sale')->insert([
            [
                'name' => 'Mapelastic/A/24 - Мапеластік/А/24 (Польща)',
                'price' => 11.9,
                'brand_id' => 1,
                'measure' => 'шт.'
            ],
            [
                'name' => 'Mapelastic/B/8 - Мапеластік/B/8',
                'price' => 65.05,
                'brand_id' => 1,
                'measure' => 'шт.'
            ],
            [
                'name' => 'K77 Superflex, серый',
                'price' => 35,
                'brand_id' => 3,
                'measure' => 'шт.'
            ]
        ]);
    }
}
