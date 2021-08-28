<?php

use Illuminate\Database\Seeder;
use App\concourCategorie;

class CategorieConcoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\concourCategorie')->create();
        factory('App\concourCategorie')->create(["nom"=>"Concours professionels"]);
        factory('App\concourCategorie')->create(["nom"=>"Mesures nouvelles"]);
    }
}
