<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_obilazak', function (Blueprint $table) {
            $table->integer('sifra_nekretnine')->unsigned();
            $table->integer('sifra_agenta')->unsigned();
            $table->string('datum_i_vreme_obilaska');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_obilazak');
    }
};
