<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesForStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles_for_staff')->insert([
            [
                'role' => 'Менеджер по продажам строительных материалов'
            ],
            [
                'role' => 'Менеджер по продажам упаковочных материалов'
            ],
            [
                'role' => 'Кладовщик'
            ]
        ]);
    }
}
