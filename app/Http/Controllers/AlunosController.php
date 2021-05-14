<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aluno;
class AlunosController extends Controller
{
    public function create(){
        return view('aluno.create');
    }
    public function store(Request $request){
        Aluno::create([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'data_nascimento'=>$request->data_nascimento,
            
        ]);
        return "Aluno salvo com sucesso";
    }
}
