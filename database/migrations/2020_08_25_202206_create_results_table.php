<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches');
            $table->unsignedInteger('result_method_id');
            $table->foreign('result_method_id')->references('id')->on('result_types');
            $table->unsignedInteger('winner');
            $table->foreign('winner')->references('id')->on('fighters');
            $table->unsignedInteger('loser');
            $table->foreign('loser')->references('id')->on('fighters');
            $table->enum('round', [1,2,3,4,5]);
            $table->time('time');
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
        Schema::dropIfExists('results');
    }
}
