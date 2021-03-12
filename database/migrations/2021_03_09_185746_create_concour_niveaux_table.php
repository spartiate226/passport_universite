<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcourNiveauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concour_niveaux', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sousCategorie_id')->unsigned();
            $table->string('niveau');
            $table->timestamps();
        });

        Schema::table('concour_niveaux', function(Blueprint $table){
            $table->foreign('sousCategorie_id')->references('id')->on('concour_sous_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concour_niveaux');
    }
}
