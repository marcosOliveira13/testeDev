<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <style>
        label{
            float: left;
            display: block;
            width: 90px;
        }
    </style>
</head>
<body>

    <form action="{{route('atualizar_aluno',['id'=>$aluno->id]) }}" method="post">
    @csrf
        <div><label for="nome">Nome</label><input type="text" name="nome" id="nome" value="{{$aluno->nome}}" required></div>
        <div><label for="email">E-mail</label><input type="email" name="email" id="email"  value="{{$aluno->email}}" required></div>
        <div><label for="data_nascimento">Data de Nasciemnto</label><input type="date" name="data_nascimento" id="data_nascimento" value="{{$aluno->data_nascimento}}" required></div> 
  
        <button type="submit">Salvar</button>
    </form>     
</body>
</html>