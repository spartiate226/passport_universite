<?php

use Illuminate\Database\Seeder;
use App\concourNiveau;

class NiveauConcoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\concourNiveau', 15)->create();
    }
}
