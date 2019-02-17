<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_song', function (Blueprint $table) {
						$table->increments('id');
						$table->integer('game_id')->unsigned();
						$table->foreign('game_id')->references('id')->on('games');
    
						$table->integer('song_id')->unsigned();
						$table->foreign('song_id')->references('id')->on('songs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_song');
    }
}
