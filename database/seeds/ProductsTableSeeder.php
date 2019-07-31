<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'name'=>'Mapelastic Mapei Гидроизоляционная смесь',
                    'brand_id'=>1,
                    'sales_area_id'=>2,
                    'applying_group_id' => 1,
                    'active'=>1,
                    'img'=>'http://mydomain/img/admin.png,http://mydomain/img/admin.png',
                    'tech_info'=>'<h1>Mapelastic Mapei</h1> Гидроизоляционная смесь двухкомпонентная, эластичная'
                ],
                [
                    'name'=>'Biaxplen Пленка фольгированная',
                    'brand_id'=>2,
                    'sales_area_id'=>1,
                    'applying_group_id' => 5,
                    'active'=>1,
                    'img'=>'http://mydomain/img/admin.png,http://mydomain/img/admin.png',
                    'tech_info'=>'Пленка фольигрованная полное описание, эластичная'
                ]
            ]
        );
    }
}
