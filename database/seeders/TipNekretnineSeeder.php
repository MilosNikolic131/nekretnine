<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipNekretnineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_tip_nekretnine')->insert([
            [
                'naziv' => 'Stan',
                'kvadratura' =>'60',
                'oprema' => 'standardna'
            ],
            [
                'naziv' => 'Kuca',
                'kvadratura' => '220',
                'oprema' => 'Neopremljena'
            ]
        ]);
    }
}
