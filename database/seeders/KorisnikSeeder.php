<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KorisnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_korisnik')->insert([
            [
                'email' => 'pera@gmail.com',
                'password' => bcrypt('pera'),
                
            ],
            [
                'email' => 'milos@gmail.com',
                'password' => bcrypt('milos'),
            ]
        ]);
    }
}
