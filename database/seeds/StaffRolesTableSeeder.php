<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff_roles')->insert([
            [
              'id_role' => 1,
              'id_stuff' => 1
            ],
            [
                'id_role' => 3,
                'id_stuff' => 2
            ],
            [
                'id_role' => 1,
                'id_stuff' => 3
            ]
        ]);
    }
}
