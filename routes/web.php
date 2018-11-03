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

//Route::resource('pacientes','Pacientes\pacientesController');

Route::get('pacientes', 'Pacientes\pacientesController@index')->name('pacientes');
Route::get('pacientes/create', 'Pacientes\pacientesController@create')->name('pacientes/create');

Route::post('pacientes', 'Pacientes\pacientesController@store');
Route::get('pacientes/get/{id_paciente}', 'Pacientes\pacientesController@get_paciente');
Route::get('pacientes/buscar/{id_paciente}', 'Pacientes\pacientesController@buscar');
Route::get('/paciente/buscarna/{nombres_apellidos?}', 'Pacientes\pacientesController@buscar_nombres_apellidos');
Route::put('pacientes/{id_paciente}', 'Pacientes\pacientesController@update');


Route::get('pacientes/ficha/{id_paciente}/basico', [
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




// ////////////
// CONFIGURAION SISTEMA
Route::get('configuracionsistema/get_tipos_sangres', 'ConfiguracionSistema\tipos_sangresController@get_tipos_sangres');
Route::get('configuracionsistema/get_estados_civiles', 'ConfiguracionSistema\estados_civilesController@get_estados_civiles');
Route::get('configuracionsistema/get_sexos', 'ConfiguracionSistema\sexosController@get_sexos');
Route::get('configuracionsistema/get_ocupaciones', 'ConfiguracionSistema\ocupacionesController@get_ocupaciones');
Route::get('configuracionsistema/get_parentescos', 'ConfiguracionSistema\parentescosController@get_parentescos');
Route::get('configuracionsistema/get_referidores', 'ConfiguracionSistema\referidoresController@get_referidores');
Route::get('configuracionsistema/get_paises', 'ConfiguracionSistema\paisesController@get_paises');