<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('prodavnice')->insert([
            'imeProdavnice' => 'Pet Centar',
            'mesto' => 'Beograd'
        ]);

        DB::table('prodavnice')->insert([
            'imeProdavnice' => 'Pet Centar',
            'mesto' => 'Novi Sad'
        ]);

        DB::table('prodavnice')->insert([
            'imeProdavnice' => 'Pet Centar',
            'mesto' => 'Kragujevac'
        ]);
        DB::table('prodavnice')->insert([
            'imeProdavnice' => 'Pet Shop',
            'mesto' => 'Cacak'
        ]);

        DB::table('prodavnice')->insert([
            'imeProdavnice' => 'Pet Shop',
            'mesto' => 'Beograd'
        ]);
    }
}
