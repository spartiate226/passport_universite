
<?php

function concourRoute(){
     Route::prefix("admin")->group(function(){
         Route::get('dashboard',"Admin\ConcourController@dashboardView");
         Route::prefix("concour")->group(function(){
             Route::get('ajouter',"Admin\ConcourController@ajoutView");
             Route::post('ajouter',"Admin\ConcourController@ajout");
         });


    });
}
