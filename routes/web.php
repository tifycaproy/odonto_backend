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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// /////////
// PACIENTES

Route::get('pacientes', 'Pacientes\pacientesController@index')->name('pacientes');
Route::post('pacientes','Pacientes\pacientesController@store');

Route::get('pacientes/create', 'Pacientes\pacientesController@create')->name('pacientes/create');

Route::get('pacientes/ficha/{id}/basico', [
        'uses' => 'Pacientes\pacientesController@ficha_basico',
        'as'   => 'paciente.ficha.basico'
 ]);
Route::get('pacientes/ficha/{id}/tratamientos', [
        'uses' => 'Pacientes\pacientesController@ficha_tratamientos',
        'as'   => 'paciente.ficha.tratamientos'
 ]);
Route::get('pacientes/ficha/{id}/citas', [
        'uses' => 'Pacientes\pacientesController@ficha_citas',
        'as'   => 'paciente.ficha.citas'
 ]);
Route::get('pacientes/ficha/{id}/recipes', [
        'uses' => 'Pacientes\pacientesController@ficha_recipes',
        'as'   => 'paciente.ficha.recipes'
 ]);
Route::get('pacientes/ficha/{id}/informe', [
        'uses' => 'Pacientes\pacientesController@ficha_informe',
        'as'   => 'paciente.ficha.informe'
 ]);




// /////
// CITAS

Route::get('citas', 'Citas\citasController@index')->name('citas');
Route::get('citas/create', 'Citas\citasController@create')->name('citas/create');

// ////////////
// TRATAMIENTOS

Route::get('tratamientos', 'Tratamientos\tratamientosController@index')->name('tratamientos');




