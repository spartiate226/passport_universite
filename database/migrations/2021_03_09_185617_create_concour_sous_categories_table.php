<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcourSousCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concour_sous_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categorie_id')->unsigned();
            $table->string('nom');
            $table->timestamps();
        });

        Schema::table('concour_sous_categories', function (Blueprint $table) {
            $table->foreign('categorie_id')->references('id')->on('concour_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concour_sous_categories');
    }
}
