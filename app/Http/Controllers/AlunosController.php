<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;
class AlunosController extends Controller
{
    public function create(){
        $cursos = Curso::all();
        return view('aluno.create',['cursos'=>$cursos]);
        //return view('aluno.create');
    }
    public function store(Request $request){
        Aluno::create([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'data_nascimento'=>$request->data_nascimento,
            'curso'=>$request->curso,
            
        ]);
        return "Aluno salvo com sucesso";
    }
    public function show(){
        $alunos = Aluno::all();
        return view('aluno.todos',['alunos'=>$alunos]);
    }
    public function destroy($id){
        $aluno= Aluno::findOrFail($id);
        $aluno->delete();
        return("Aluno Excluído com sucessol!");
    }
    public function edit($id){
        $aluno = Aluno::findOrFail($id);
        $cursos=Curso::all();
        return view('aluno.editar',['aluno'=>$aluno],['cursos'=>$cursos]);

    }
    public function update(Request $request, $id){
        $aluno = Aluno::findOrFail($id);
        $aluno->update([
            'nome'=> $request->nome,
            'email'=> $request->email,
            'data_nascimento'=> $request->data_nascimento,
            'curso'=>$request->curso,

        ]);
        return("Aluno Atualizado com Sucesso!");

    }
    public function cursos_cadastrados(){
        $cursos = Curso::all();
        return view('aluno.create',['cursos'=>$cursos]);
    }
}
