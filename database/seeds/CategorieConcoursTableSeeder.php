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
        factory('App\concourCategorie', 30)->create();
    }
}
