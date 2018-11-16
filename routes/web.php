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
Route::post('pacientes/eliminar/{id_paciente}', 'Pacientes\pacientesController@eliminar');
//eso es necesario por la ruta despues de una busqueda
Route::post('pacientes/pacientes/eliminar/{id_paciente}', 'Pacientes\pacientesController@eliminar');
Route::get('pacientes/buscar/{id_paciente}', 'Pacientes\pacientesController@buscar');
Route::get('pacientes/buscarna/{nombres_apellidos?}', 'Pacientes\pacientesController@buscar_nombres_apellidos');
Route::put('pacientes/{id_paciente}', 'Pacientes\pacientesController@update');

Route::post('historias', 'Pacientes\historias_medicasController@store');
Route::get('historias/get/{id_paciente}', 'Pacientes\historias_medicasController@get_historia_medica');
Route::put('historias/{id_historia_medica}', 'Pacientes\historias_medicasController@update');

Route::get('historiasenfermedades/get/{id_historia_medica}', 'Pacientes\historias_medicas_enfermedadesController@get_historia_medica_enfermedades');


Route::get('pacientes/ficha/{id_paciente}/basico', [
        'uses' => 'Pacientes\pacientesController@ficha_basico',
        'as'   => 'paciente.ficha.basico'
 ]);

Route::get('pacientes/ficha/{id_paciente}/tratamientos', [
        'uses' => 'Pacientes\pacientesController@ficha_tratamientos',
        'as'   => 'paciente.ficha.tratamientos'
 ]);

 Route::get('pacientes/ficha/{id_paciente}/tratamientos/create', [
        'uses' => 'Pacientes\pacientesController@ficha_tratamientos_cretate',
        'as'   => 'paciente.ficha.create-tratamientos'
 ]);

Route::get('pacientes/ficha/{id_paciente}/citas', [
        'uses' => 'Pacientes\pacientesController@ficha_citas',
        'as'   => 'paciente.ficha.citas'
 ]);
Route::get('pacientes/ficha/{id_paciente}/recipes', [
        'uses' => 'Pacientes\pacientesController@ficha_recipes',
        'as'   => 'paciente.ficha.recipes'
 ]);
Route::get('pacientes/ficha/{id_paciente}/informe', [
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
Route::post('tratamientos', 'Tratamientos\tratamientosController@store');
Route::get('tratamientos/get/{id_tratamiento}', 'Tratamientos\tratamientosController@get_tratamiento');
Route::put('tratamientos/{id_tratamiento}', 'Tratamientos\tratamientosController@update');
Route::post('tratamientos/eliminar/{id_tratamiento}', 'Tratamientos\tratamientosController@destroy');
Route::post('pacientes/ficha/{id_paciente}/tratamientos/eliminar/{id_tratamiento}', 'Tratamientos\tratamientosController@destroy');

////////////////
// ADMINISTRACION
Route::get('tratamientos_categorias', 'Administracion\tratamientos_categoriasController@create')->name('tratamientos_categorias');
Route::get('tratamientos_categorias/get_registros/{id_tratamiento}', 'Administracion\tratamientos_categoriasController@get_registro');
Route::get('tratamientos_categorias/get_registros', 'Administracion\tratamientos_categoriasController@get_registro');
Route::resource('tratamientos_categorias_registro','Administracion\tratamientos_categoriasController');
Route::get('tratamientos_disponibles', 'Administracion\tratamientos_disponiblesController@create')->name('tratamientos_disponibles');
Route::resource('trata_dispo_registo','Administracion\tratamientos_disponiblesController');


#Route::post('tratamientos_categorias', 'Administracion\tratamientos_categoriasController@store');
#Route::put('tratamientos_categorias/{id_tratamiento_categoria}', 'Administracion\tratamientos_categoriasController@update');
#Route::post('tratamientos_categorias/eliminar/{id_tratamiento_categoria}', 'Administracion\tratamientos_categoriasController@destroy');
#Route::get('tratamientos_categorias/create', 'Administracion\tratamientos_categoriasController@create')->name('tratamientos_categorias/create');
#Route::get('tratamientos_categorias/get/{id_tratamiento_categoria}', 'Administracion\tratamientos_categoriasController@get_tratamiento_categoria')->name('tratamientos_categorias/create');



// ////////////
// CONFIGURAION SISTEMA
Route::get('configuracionsistema/get_tipos_sangres', 'ConfiguracionSistema\tipos_sangresController@get_tipos_sangres');
Route::get('configuracionsistema/get_estados_civiles', 'ConfiguracionSistema\estados_civilesController@get_all');
Route::get('configuracionsistema/get_sexos', 'ConfiguracionSistema\sexosController@get_sexos');
Route::get('configuracionsistema/get_ocupaciones', 'ConfiguracionSistema\ocupacionesController@get_ocupaciones');
Route::get('configuracionsistema/get_parentescos', 'ConfiguracionSistema\parentescosController@get_parentescos');
Route::get('configuracionsistema/get_referidores', 'ConfiguracionSistema\referidoresController@get_referidores');
Route::get('configuracionsistema/get_paises', 'ConfiguracionSistema\paisesController@get_paises');
Route::get('configuracionsistema/get_enfermedades', 'ConfiguracionSistema\enfermedadesController@get_all');
Route::get('configuracionsistema/get_odontologos', 'Auth\userControlle@get_all');
