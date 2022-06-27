<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AgentSeeder::class);
        $this->call(TipNekretnineSeeder::class);
        $this->call(NekretnineSeeder::class);
        $this->call(ObilazakSeeder::class);
        $this->call(KorisnikSeeder::class);
    }
}
