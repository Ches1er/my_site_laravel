<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsDiscountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients_discounts')->insert([
            [
                'client_id'=>2,
                'brand_id'=>1,
                'discount'=>0.15
            ],
            [
                'client_id'=>2,
                'brand_id'=>3,
                'discount'=>0.1
            ]
        ]);
    }
}
