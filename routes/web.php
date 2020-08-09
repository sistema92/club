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
//RUTAS DE /
Route::get('/','Controller@index')->name('index')->middleware('auth');

Auth::routes();
Route::get('/home','HomeController@index');

//RUTAS DE JUGADOR
Route::resource('jugador','JugadorController');
Route::get('/jugador','JugadorController@index')->name('index_jugador')->middleware('auth');
Route::get('/create_jugador','JugadorController@create')->name('create_jugador')->middleware('auth');
Route::post('/save_jugador','JugadorController@store')->name('save_jugador')->middleware('auth');
Route::get('/jugador/{id}/edit','JugadorController@edit')->name('edit_jugador')->middleware('auth');
Route::post('/jugador/{id}','JugadorController@destroy')->name('destroy_jugador')->middleware('auth');

//RUTAS DE ENTRENADOR
Route::resource('entrenador','EntrenadorController');
Route::get('/entrenador','EntrenadorController@index')->name('index_entrenador')->middleware('auth');
Route::get('/create_entrenador','EntrenadorController@create')->name('create_entrenador')->middleware('auth');
Route::post('/save_entrenador','EntrenadorController@store')->name('save_entrenador')->middleware('auth');
Route::get('/entrenador/{id}/edit','EntrenadorController@edit')->name('edit_entrenador')->middleware('auth');
Route::post('/entrenador/{id}','EntrenadorController@destroy')->name('destroy_entrenador')->middleware('auth');

//RUTAS DE PLANTILLAS
Route::resource('plantilla','PlantillaController');
Route::get('/create_plantilla','PlantillaController@create')->name('create_plantilla');
Route::post('/save_plantilla','PlantillaController@store')->name('save_planilla');


//RUTAS DE NACIONALIDAD
Route::resource('nacionalidad','NacionalidadController');
Route::get('/nacionalidad','NacionalidadController@index')->name('index_nacionalidad')->middleware('auth');
Route::get('/create_nacionalidad','NacionalidadController@create')->name('create_nacionalidad')->middleware('auth');
Route::post('/save_nacionalidad','NacionalidadController@store')->name('save_nacionalidad')->middleware('auth');
Route::get('/nacionalidad/{id}/edit','NacionalidadController@edit')->name('edit_nacionalidad')->middleware('auth');
Route::post('/nacionalidad/{id}','NacionalidadController@update')->name('update_nacionalidad')->middleware('auth');
Route::post('/nacionalidad/{id}','NacionalidadController@destroy')->name('destroy_nacionalidad')->middleware('auth');




