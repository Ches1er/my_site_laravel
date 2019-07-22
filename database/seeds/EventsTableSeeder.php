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
                'img' => 'http://mydomain/img/admin.png',
                'date'=> '2019-07-10 12:24:50',
                'expiration'=> '2019-07-24 12:24:50',
                'sales_area_id'=>2
            ],
            [   'name'=>'Акция рынка упаковочных материалов номер 1',
                'short_event' => 'Короткая акция рынка упаковочных материалов номер 1',
                'full_event' => 'Полноценная акция рынка упаковочных материалов номер 1',
                'img' => 'img/2.png',
                'date'=> '2019-07-10 12:25:50',
                'expiration'=> '2019-07-24 12:24:50',
                'sales_area_id'=>1]
        ]);
    }
}
