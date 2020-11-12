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

Route::get('/', 'App\Http\Controllers\ProcuraController@index')->name('procura.index');

Route::get('/jogadores','App\Http\Controllers\JogadoresController@index')->name('jogadores.index');

Route::get('/equipas','App\Http\Controllers\EquipasController@index')->name('equipas.index');

Route::get('/jogadores/{id}/show','App\Http\Controllers\JogadoresController@show')->name('jogadores.show');

Route::get('/equipas/{id}/show','App\Http\Controllers\EquipasController@show')->name('equipas.show');

Route::post('/pesquisa/resultado', 'App\Http\Controllers\ProcuraController@pesquisa')->name('pesquisa.show');
