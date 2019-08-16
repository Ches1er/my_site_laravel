<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solutions')->insert([
            'name'=>'Система для быстрого ремонта и облицовки поверхностей в коммерческой недвижимости',
            'desc'=>'Применяется для ремонта и облицовки поверхностей в объектах коммерческой недвижимости. Работы которые необходимо выполнить: покраска внутриенних стен и облицовка пола.',
            'img'=>34,
            'products'=>'3,4,5'
        ]);

    }
}
