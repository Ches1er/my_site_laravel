<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                 'name'=>'Mapei',
                 'active'=>true,
                 'sales_area_id'=>2,
                 'official'=>1,
                 'web'=>'https://www.mapei.com',
                 'img'=>'3'],
            [
                'name'=>'Biaxplen',
                'active'=>true,
                'sales_area_id'=>1,
                'official'=>0,
                'img'=>'1'
            ],
            [
                'name'=>'Litokol',
                'active'=>true,
                'sales_area_id'=>2,
                'official'=>1,
                'img'=>'1'
            ]
        ]);
    }
}
