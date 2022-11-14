<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;



class StvarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stvari')->insert([
                'naziv' => 'Grebalica za macke',
                'opis' => 'Igracka za macke',
                'cena' => '3000',
                'shopid' => rand(1,5),
                'userid' => rand(1,5)

        ]);

        DB::table('stvari')->insert([
            'naziv' => 'Cebe za ljubimce',
            'opis' => 'Pokrivac',
            'cena' => '1200',
            'shopid' => rand(1,5),
            'userid' => rand(1,5)

    ]);

    DB::table('stvari')->insert([
        'naziv' => 'Cinija za jelo',
        'opis' => 'Posuda za prehranu',
        'cena' => '700',
        'shopid' => rand(1,5),
        'userid' => rand(1,5)

]);
        DB::table('stvari')->insert([
        'naziv' => 'Igracka mis',
        'opis' => 'Igracka za macke',
        'cena' => '200',
        'shopid' => rand(1,5),
        'userid' => rand(1,5)

    ]);

    DB::table('stvari')->insert([
        'naziv' => 'Kucica za pse',
        'opis' => 'Dom za pse',
        'cena' => '2700',
        'shopid' => rand(1,5),
        'userid' => rand(1,5)

    ]);

    DB::table('stvari')->insert([
        'naziv' => 'Casa za ljubimce',
        'opis' => 'Casa za pice',
        'cena' => '700',
        'shopid' => rand(1,5)
        ,
        'userid' => rand(1,5)
    ]);

    DB::table('stvari')->insert([
        'naziv' => 'Hrana za ljubimce',
        'opis' => 'Hrana za pse,macke,zeceve',
        'cena' => '300',
        'shopid' => rand(1,5),
        'userid' => rand(1,5)

    ]);

    DB::table('stvari')->insert([
        'naziv' => 'Igracka za pse',
        'opis' => 'Igracka',
        'cena' => '300',
        'shopid' => rand(1,5),
        'userid' => rand(1,5)

    ]);
    }
}
