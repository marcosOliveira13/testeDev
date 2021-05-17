<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar curso</title>
    <style>
        label{
            float: left;
            display: block;
            width: 90px;
        }
    </style>
</head>
<body>

    <form action="{{ route('atualizar_curso',['id'=>$curso->id]) }}" method="post">
    @csrf
        <div><label for="titulo">Título</label><input type="text" name="titulo" id="titulo" required value="{{$curso->titulo}}"></div>
        <div><label for="descricao">Descrição</label><input type="descricao" name="descricao" id="descricao" value="{{$curso->descricao}}"></div>           
        <button type="submit">Salvar</button>
    </form>
</body>
</html>