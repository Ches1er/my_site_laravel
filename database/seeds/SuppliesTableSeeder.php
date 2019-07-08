<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplies')->insert([
            [
                'name'=>'Mapelastic',
                'brand_id'=>1,
                'sales_area_id'=>2,
                'category_id'=>1,
                'active'=>true,
                'img'=>'img/img.png',
                'tech_info'=>'<h1>Гидроизоляция Mapei Mapelastic</h1>'
            ],
            [
                'name'=>'Keralastic',
                'brand_id'=>1,
                'sales_area_id'=>2,
                'category_id'=>2,
                'active'=>true,
                'img'=>'img/img.png',
                'tech_info'=>'<h1>Клей для плитки Mapei Keralastic</h1>'
            ]]);
    }
}
