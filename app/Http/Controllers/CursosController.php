<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    //Controller de Cursos
    public function create(){
        return view('curso.create');
    }
    public function store(Request $request){
        Curso::create([
            'titulo'=>$request->titulo,
            'descricao'=>$request->descricao,
        ]);
        return ("Curso Salvo com sucesso!");        

    }
    public function show(){
        $cursos = Curso::all();
        return view('curso.todos',['cursos'=>$cursos]);
    }
    public function destroy($id){
        $curso = Curso::FindOrFail($id);
        $curso ->delete();

        return ("Curso Excluido com Sucesso");
    }
    public function edit($id){
        $curso= Curso::FindOrfail($id);
        return view('curso.editar',['curso'=>$curso]);
    }
    public function update(Request $request,$id){
        $curso = Curso::FindOrFail($id);
        $curso->update([
            'titulo'=> $request->titulo,
            'descricao'=>$request->descricao,
        ]);
        return ("Curso atualizado com sucesso!");

    }
    

}
