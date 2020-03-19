<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmyList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('army_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('factionType');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armyList');
        Schema::dropIfExists('army_list');
        Schema::dropIfExists('army_lists');
    }
}
