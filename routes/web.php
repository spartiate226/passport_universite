<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontoffice.frontpage');
});
Route::post('auth/connexion','authController@visiteConnexion');
Route::post('auth/inscription','authController@visiteRegister');
concourRoute();
Route::any('page/{page}/{param?}','Front\linkController');
