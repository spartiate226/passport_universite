<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcourResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concour_resultats', function (Blueprint $table) {
            $table->id();
            $table->integer('concour_question_id');
            $table->integer('user_id');
            $table->integer('point');
            $table->integer('skip');
            $table->string('quizperdu');
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
        Schema::dropIfExists('concour_resultats');
    }
}
