<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    private $path = 'http://mydomain/';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
              'name'=> 'admin',
              'path' => $this->path.'img/admin.png'
            ],
            [
                'name'=> 'mapecoatI600',
                'path' => $this->path.'img/mapecoat_I600.jpg'
            ],
            [
                'name'=> 'mapei_logo',
                'path' => $this->path.'img/mapei_logo.png'
            ],
            [
                'name'=> 'calc_ultracolor.png',
                'path' => $this->path.'img/calc_ultracolor.png'
            ],
            [
                'name'=> 'calc_keracolor.png',
                'path' => $this->path.'img/calc_keracolor.png'
            ],
            [
                'name'=> 'calc_kerapoxy.png',
                'path' => $this->path.'img/calc_kerapoxy.png'
            ]

        ]);
    }
}
