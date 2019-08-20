<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsExchangeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands_exchange')->insert([
            [
               'brand_id'=>1,
               'exchange'=>30.6
            ],
            [
                'brand_id'=>3,
                'exchange'=>31
            ]
        ]);
    }
}
