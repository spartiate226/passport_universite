<?php

use Illuminate\Database\Seeder;
use App\concourSousCategorie;

class SousCategorieConcoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\concourSousCategorie', 15)->create();
    }
}
