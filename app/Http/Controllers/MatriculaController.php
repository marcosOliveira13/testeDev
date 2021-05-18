<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula_;
use App\Models\Aluno;
use App\Models\Curso;

class MatriculaController extends Controller
{
    public function create(){
        $alunos = Aluno::all();
        $cursos = Curso::all();
        return view('matricula.create',['alunos'=>$alunos], ['cursos'=>$cursos]);
    }
    public function store(Request $request){
        Matricula_::create([
            'id_aluno'=>$request->aluno,
            'id_curso'=>$request->curso,    

        ]);
        return ("Matricula realizada com sucesso");
    }
    public function show(){
        $alunos = Aluno::all();
        $cursos = Curso::all();   
        $matriculas = Matricula_::all();

        return view('matricula.todos',['matriculas'=>$matriculas],['alunos'=>$alunos]);
        //return view('matricula.todos',['matriculas'=>$matriculas]);
    }
    public function destroy($id){
        $matricula = Matricula_::FindOrFail($id);
        $matricula ->delete();

        return ("Matricula Excluida com Sucesso");
    }/*
    public function edit($id){
        $matriculas= Matricula_::FindOrfail($id);
        return view('matricula.editar',['matriculas'=>$matriculas]);
    }
    public function update(Request $request,$id){
        $matricula = Matricula_::FindOrFail($id);
        $matricula->update([
            'id_aluno'=> $request->aluno,
            'descricao'=>$request->curso,
        ]);
        return ("Matricula atualizada com sucesso!");

    }*/

}
