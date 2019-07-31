<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'name'=> 'Клиент 1',
                'logo' => 'http://mydomain/img/admin.png',
                'desc' => 'Описание клиента упаковочных материалов номер 1',
                'sales_area_id' => 1
            ],
            [
                'name'=> 'Клиент 2',
                'logo' => 'http://mydomain/img/admin.png',
                'desc' => 'Описание клиента упаковочных материалов номер 2',
                'sales_area_id' => 1
            ]
        ]);
    }
}
