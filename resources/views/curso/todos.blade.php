<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Cadastrados</title>
</head>
<body>
    <table>
    <a href="{{route('novo_curso')}}">Novo Curso</a>
    <tr><th>Titulo</th><th>Descrição</th></tr>
    @foreach($cursos as $curso)    
    <tr>
        <td>{{$curso->titulo}}</td>
        <td>{{$curso->descricao}}</td>       
        <td><a href="{{route('editar_curso',['id'=>$curso->id])}}"
        title="Editar curso{{$curso->titulo}}">Editar</a></td>    
        <td><a href="{{route('excluir_curso',['id' =>$curso->id])}}"
        title="Excluir curso {{$curso->titulo}}" >Excluir</a></td>
    </tr>
    @endforeach
</body>
</html>