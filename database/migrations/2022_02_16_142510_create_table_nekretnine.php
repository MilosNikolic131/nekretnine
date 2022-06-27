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
        Schema::create('table_nekretnine', function (Blueprint $table) {
            $table->increments('id_nekretnine')->unique();
            $table->string('Adresa');
            $table->double('cena_po_kvadratu');
            $table->integer('tip_nekretnine')->unsigned();
            $table->integer('agent_zaduzen_za_nekretninu')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_nekretnine');
    }
};
