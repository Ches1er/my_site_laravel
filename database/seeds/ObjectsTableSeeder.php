<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objects')->insert([
            [
               'name'=>'Объект номер 1',
               'desc'=>'Описание объекта номер 1',
               'img' => '1'
            ],
            [
                'name'=>'Объект номер 2',
                'desc'=>'Описание объекта номер 2',
                'img' => '2'
            ]
        ]);
    }
}
