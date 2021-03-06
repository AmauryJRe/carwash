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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('client', 'ClientController');

Route::resource('turno', 'TurnoController');

Route::resource('marca', 'MarcaController');

Route::resource('modelo', 'ModeloController');

Route::resource('systemUser', 'UsuariosController');

Route::resource('washType', 'TipoLavadoController');

Route::resource('vehicleType', 'TipoAutoController');

Route::post('/autocomplete/vehicles', 'AutocompleteController@vehicles')->name("autocomplete.vehicles");
Route::post('/autocomplete/marks', 'AutocompleteController@marks')->name("autocomplete.marks");
Route::post('/autocomplete/models', 'AutocompleteController@models')->name("autocomplete.models");
