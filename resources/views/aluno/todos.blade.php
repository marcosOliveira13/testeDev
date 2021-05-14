<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos Cadastrados</title>
</head>
<body>
    <table>
    <tr><th>Nome</th><th>Email</th><th>Data de Nascimento</th></tr>
    @foreach($alunos as $aluno)
    <tr>
        <td>{{$aluno->nome}}</td>
        <td>{{$aluno->email}}</td>
        <td>{{$aluno->data_nascimento}}</td> 
        <td><a href="{{ route('editar_aluno', ['id'=>$aluno->id]) }}"
        title="Editar Aluno {{$aluno->nome}}">Editar</a></td>    
        <td><a href="{{ route('excluir_aluno', ['id' =>$aluno->id]) }}"
        title="Excluir Aluno {{$aluno->nome}}" >Excluir</a></td>
    </tr>
    @endforeach
</body>
</html>