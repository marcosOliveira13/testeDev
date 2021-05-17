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
}
