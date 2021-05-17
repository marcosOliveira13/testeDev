<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar matrícula</title>
    <style>
        label{
            float: left;
            display: block;
            width: 90px;
        }
    </style>
</head>
<body>

    <form action="{{ route('salvar_matricula') }}" method="post">
    @csrf
        <div><label for="aluno">Aluno</label><select name="aluno" id="aluno"required>        
        @foreach($alunos as $aluno) 
        <option value="{{$aluno->id}}">{{$aluno->nome}}</option>       
        @endforeach
        </select></div>
        <br>
        <div><label for="curso">Curso</label><select name="curso" id="curso" required>
        @foreach($cursos as $curso) 
        <option value="{{$curso->id}}">{{$curso->titulo}}</option>
        @endforeach
        </select></div>       
        <button type="submit">Salvar</button>
    </form>     
</body>
</html>