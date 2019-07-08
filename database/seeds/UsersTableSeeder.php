<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pass = Hash::make("1111");

        DB::table("users")->insert([
            [
                "name"=>"Admin",
                "email"=>"shop@ukrpolystroy.com.ua",
                "password"=>$pass,
                "verification_token"=>Str::random(20),
                "phones"=>"{+380956281}"
            ],
            [
                "name"=>"User",
                "email"=>"shop@ukrpolystroy.com.ua",
                "password"=>$pass,
                "verification_token"=>Str::random(20),
                "phones"=>"{+380956281}"
            ]
        ]);
    }
}
