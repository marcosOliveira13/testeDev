<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriculas Cadastrados</title>
</head>
<body>
<h3>Matrículas realizadas</h3>
    <table>
    <a href="{{route('nova_matricula')}}">Nova Matrícula</a>
    <tr><th>Lista de Matricula</th><th>ID Matricula</th></tr>
    <tr>   
    @foreach($matriculas as $matricula)
        @foreach($alunos as $aluno)

            @if($aluno->id == $matricula->id_aluno)
                <td>{{$aluno->nome}}</td>    
                <td>{{$matricula->id}}</td>                
                <td><a href=""
                title="">Editar</a></td>    
                <td><a href="{{ route('excluir_matricula',['id'=>$matricula->id]) }}">Excluir</a></td>
                </tr>                
            @endif
        @endforeach          
    @endforeach
    
</body>
</html>