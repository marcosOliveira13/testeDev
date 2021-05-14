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

route::get('/aluno/novo','AlunosController@create');
route::post('/aluno/novo','AlunosController@store')->name('salvar_aluno');
route::get('/aluno/ver','AlunosController@show');