<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            ['name'=>'Главный офис','address'=>'г. Днепр ул. Б.Хмельницкого, 16','phone'=>'+380567170735','long'=>35.082483,'lat'=>48.503946,'role_id'=>1],
            ['name'=>'Офис левый берег','address'=>'г. Днепр ул. Байкальская, 4','phone'=>'+380567170735','long'=>35.100588,'lat'=>48.518242,'role_id'=>2],
            ['name'=>'Офис склад правый берег','address'=>'г. Днепр ул. Запорожское шоссе, 27','phone'=>'+380567890340','long'=>35.031886,'lat'=>48.409411,'role_id'=>3]
        ]);
    }
}
