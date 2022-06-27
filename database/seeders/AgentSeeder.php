<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_agent')->insert([
            [
                'ime_i_prezime' => 'Petar Petrovic',
                'password' => bcrypt('petar'),
                'JMBG' => '1234567891011'
            ],
            [
                'ime_i_prezime' => 'Milan Milanovic',
                'password' => bcrypt('milan'),
                'JMBG' => '1234567891012'
            ]
        ]);
    }
}
