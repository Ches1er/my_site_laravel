<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['role'=>'admin'],
            ['role'=>'valid_user'],
            ['role'=>'invalid_user'],
            ['role'=>'non_active_user'],
            ['role'=>'confirmed_user']]);
    }
}
