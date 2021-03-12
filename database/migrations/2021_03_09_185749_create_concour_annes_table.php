<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcourAnnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concour_annes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('niveau_id')->unsigned();
            $table->string('annee');
            $table->timestamps();
        });
        Schema::table('concour_annes', function(Blueprint $table){
            $table->foreign('niveau_id')->references('id')->on('concour_niveaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concour_annes');
    }
}
