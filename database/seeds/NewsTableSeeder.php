<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [   'name'=>'Новость строительного рынка номер 1',
                'short_news' => 'Короткая новость стрлительногоо рынка номер 1',
                'full_news' => 'Полноценная новость стрлительногоо рынка номер 1',
                'img' => 'img/1.png',
                'date'=> '2019-07-10 12:24:50',
                'sales_area_id'=>2
                ],
            [   'name'=>'Новость рынка упаковочных материалов номер 1',
                'short_news' => 'Короткая новость рынка упаковочных материалов номер 1',
                'full_news' => 'Полноценная новость рынка упаковочных материалов номер 1',
                'img' => 'img/2.png',
                'date'=> '2019-07-10 12:25:50',
                'sales_area_id'=>1]
        ]);
    }
}