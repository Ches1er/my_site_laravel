<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales_area')->insert([
            ['name'=>'Материалы для упаковки и полиграфии'],
            ['name'=>'Строительные материалы']
        ]);
    }
}
