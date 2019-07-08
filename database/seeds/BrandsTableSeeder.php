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
                 'img'=>'img/img.png'],
            [
                'name'=>'Biaxplen',
                'active'=>true,
                'sales_area_id'=>1,
                'img'=>'img/img.png'
            ]
        ]);
    }
}
