<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('team_id');
            $table->string('profileImage');
            $table->string('pitchImage');
            $table->string('realName');
            $table->string('nickName');
            $table->string('position_id');
            $table->string('age');
            $table->string('height');
            $table->string('weight');
            $table->text('history');
            $table->string('nationality');
            $table->string('pob');
            $table->text('bio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
