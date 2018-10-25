<?php

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
    return view('welcome');
});

Route::get('/sensores/agua/agora', 'SensoresAguaController@agora');
Route::get('/sensores/agua/ultimos-trinta-dias', 'SensoresAguaController@ultimosTrintaDias');
Route::get('/sensores/luz/agora', 'SensoresLuzController@agora');
Route::get('/sensores/luz/ultimos-trinta-dias', 'SensoresLuzController@ultimosTrintaDias');
