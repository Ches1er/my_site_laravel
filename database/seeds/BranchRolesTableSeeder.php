<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branch_roles')->insert([
            ['role'=>'Офис'],['role'=>'Склад'],['role'=>'Офис и склад']
        ]);
    }
}
