<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObilazakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_obilazak')->insert([
            [
                'sifra_nekretnine' => '1',
                'sifra_agenta' => '1',
                'datum_i_vreme_obilaska' => '25.02.2022 13:00',
            ],
            [
                'sifra_nekretnine' => '2',
                'sifra_agenta' => '2',
                'datum_i_vreme_obilaska' => '27.02.2022 15:30',
            ]
        ]);
    }
}
