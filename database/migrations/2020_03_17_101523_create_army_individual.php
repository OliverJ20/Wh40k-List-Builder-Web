<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmyIndividual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('army_individuals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('army_id')->default(0);;
            $table->string('army_name');
            $table->text('army_hq_units');
            $table->text('army_troops_units');
            $table->text('army_elites_units');
            $table->text('army_fast_units');
            $table->text('army_heavy_units');
            $table->text('army_flyer_units');
            $table->text('army_transport_units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armyIndividual');
        Schema::dropIfExists('army_individuals');
        Schema::dropIfExists('army_individual');
    }
}
