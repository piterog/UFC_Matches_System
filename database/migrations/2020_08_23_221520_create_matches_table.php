<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('fighter_1');
            $table->unsignedInteger('fighter_2');
            $table->enum('type_match', ['3', '5', 'c']);
            $table->enum('rank', [1, 2, 3]);
            $table->unsignedInteger('event_id');
            $table->foreign('event_id')->references('id')->on('events');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->enum('played_with', [1, 2]);
            $table->integer('order');
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
        Schema::dropIfExists('matches');
    }
}
