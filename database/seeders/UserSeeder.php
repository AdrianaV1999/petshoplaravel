<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Str;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        foreach(range(1,10) as $item)
        {
            DB::table('users')->insert([
                'name' => "name $item",
                'email' => "email $item",
                'email_verified_at' => now(),
                'password' => "password $item" 
            ]);
        }
    
    }

        

    }

