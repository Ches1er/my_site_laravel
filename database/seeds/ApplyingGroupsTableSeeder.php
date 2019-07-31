<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplyingGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applying_groups')->insert([
            [
                'name'=>'Гидроизоляционные материалы',
                'sales_area_id'=> 2
            ],
            [
                'name'=>'Клей для плитки и натурального камня',
                'sales_area_id'=> 2
            ],
            [
                'name'=>'Материалы для упаковки 1',
                'sales_area_id'=> 1
            ]
        ]);
    }
}
