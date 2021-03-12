<?php

use Illuminate\Database\Seeder;
use App\concourAnne;
class AnneeConcoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\concourAnne', 15)->create();
    }
}
