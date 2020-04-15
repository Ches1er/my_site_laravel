<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            [
              'name' => 'Иван',
              'surname' => 'Шатилов',
              'phone_work' => '+380676411212',
              'phone_personal' => '+380952033856',
              'email' => 'shatilov@td-marafon.com',
              'branch_id' => 3
            ],
            [
                'name' => 'Акулов',
                'surname' => 'Иван',
                'phone_work' => '+380955480717',
                'phone_personal' => '+380955480717',
                'email' => 'sklad@td-marafon.com',
                'branch_id' => 2
            ],
            [
                'name' => 'Кагитин',
                'surname' => 'Антон',
                'phone_work' => '+380678404428',
                'phone_personal' => '+380501844428',
                'email' => 'kagitin@td-marafon.com',
                'branch_id' => 1
            ]
        ]);
    }
}
