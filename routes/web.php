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
//Rotas para Aluno:
//cadastro de alunos
route::get('/aluno/novo','AlunosController@create')->name('novo_aluno');
route::post('/aluno/novo','AlunosController@store')->name('salvar_aluno');
//mostrar alunos cadastrados 
route::get('/aluno/ver','AlunosController@show');
//excluir alunos cadastrados
route::get('/aluno/del/{id}','AlunosController@destroy')->name('excluir_aluno');
//editar alunos cadastrados 
route::get('/aluno/edit/{id}','AlunosController@edit')->name('editar_aluno');
route::post('/aluno/edit/{id}','AlunosController@update')->name('atualizar_aluno');

//rotas para cursos:
//cadastro de cursos 
route::get('/curso/novo','CursosController@create')->name ('novo_curso');
route::post('/curso/novo','CursosController@store')->name('salvar_curso');
//mostrar cursos cadastrados 
route::get('/curso/ver','CursosController@show');
//excluir cursos cadastrados
route::get('/curso/del/{id}','CursosController@destroy')->name('excluir_curso');
//editar curso
route::get('/curso/edit/{id}','CursosController@edit')->name('editar_curso');
route::post('/curso/edit{id}','CursosController@update')->name('atualizar_curso');
//reliza matricula
route::get('/matricula/nova','MatriculaController@create')->name ('nova_matricula');
route::post('/matricula/nova','MatriculaController@store')->name('salvar_matricula');
route::get('/matricula/ver','MatriculaController@show');
//eclui matricula
route::get('/matricula/del/{id}','MatriculaController@destroy')->name('excluir_matricula');
//editar curso
route::get('/matricula/edit/{id}','MatriculaController@edit')->name('editar_matricula');
route::post('/matricula/edit/{id}','MatriculaController@edit')->name('atualizar_matricula');