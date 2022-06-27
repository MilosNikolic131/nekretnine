<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NekretnineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_nekretnine')->insert([
            [
                'Adresa' => 'Save Milosevica 2',
                'cena_po_kvadratu' => '1600.00',
                'tip_nekretnine' => '1',
                'agent_zaduzen_za_nekretninu' => '2'
            ],
            [
                'Adresa' => 'Vojvode Stepe 44',
                'cena_po_kvadratu' => '1349.99',
                'tip_nekretnine' => '2',
                'agent_zaduzen_za_nekretninu' => '2'
            ],
            [
                'Adresa' => 'Juzni Bolevar 75',
                'cena_po_kvadratu' => '3600',
                'tip_nekretnine' => '1',
                'agent_zaduzen_za_nekretninu' => '1'
            ]
        ]);
    }
}
