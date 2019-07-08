<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_roles')->insert([['user_id'=>1,'role_id'=>1],
            ['user_id'=>1,'role_id'=>2],
            ['user_id'=>2,'role_id'=>2]
            ]);
    }
}
