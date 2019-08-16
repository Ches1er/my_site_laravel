<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [   'name'=>'Акция строительного рынка номер 1',
                'short_event' => 'Короткая акция стрлительногоо рынка номер 1',
                'full_event' => 'Полноценная акция стрлительногоо рынка номер 1',
                'img' => 1,
                'date'=> 11234567,
                'expiration'=> 11234580,
                'sales_area_id'=>2
            ],
            [   'name'=>'Акция рынка упаковочных материалов номер 1',
                'short_event' => 'Короткая акция рынка упаковочных материалов номер 1',
                'full_event' => 'Полноценная акция рынка упаковочных материалов номер 1',
                'img' => 1,
                'date'=> 11234567,
                'expiration'=>  11234580,
                'sales_area_id'=>1]
        ]);
    }
}
