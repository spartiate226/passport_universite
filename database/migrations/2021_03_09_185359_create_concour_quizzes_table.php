<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcourQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concour_quizzes', function (Blueprint $table) {
            $table->id();
            $table->integer('quiz');
            $table->string("question");
            $table->text("reponses");
            $table->text("propositions");
            $table->integer("point");
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
        Schema::dropIfExists('concour_quizzes');
    }
}
