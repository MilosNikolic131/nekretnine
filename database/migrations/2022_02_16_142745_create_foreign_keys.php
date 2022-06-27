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
        Schema::table('table_nekretnine', function (Blueprint $table) {
            $table->foreign('tip_nekretnine')->references('tip_id')->on('table_tip_nekretnine'); 
            $table->foreign('agent_zaduzen_za_nekretninu')->references('id')->on('table_agent'); 
        });
        Schema::table('table_obilazak', function (Blueprint $table) {
            $table->foreign('sifra_nekretnine')->references('id_nekretnine')->on('table_nekretnine'); 
            $table->foreign('sifra_agenta')->references('id')->on('table_agent'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_nekretnine', function (Blueprint $table) {
            $table->dropForeign('tip_nekretnine');
            $table->dropForeign('agent zaduzen za nekretninu');
        });
        Schema::table('table_obilazak', function (Blueprint $table) {
            $table->dropForeign('sifra_nekretnine');
            $table->dropForeign('sifra_agenta');
        });
    }
};
