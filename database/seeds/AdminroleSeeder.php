<?php

use Illuminate\Database\Seeder;

class AdminroleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\AdminRole::class)->create();
        factory(\App\AdminRole::class)->create(['nom'=>"Contributeur"]);
        factory(\App\AdminRole::class)->create(['nom'=>"Editeur"]);
    }
}
