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
        Schema::create('table_tip_nekretnine', function (Blueprint $table) {
            $table->increments('tip_id')->unique();
            $table->string('naziv');
            $table->double('kvadratura');
            $table->string('oprema');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_tip_nekretnine');
    }
};
