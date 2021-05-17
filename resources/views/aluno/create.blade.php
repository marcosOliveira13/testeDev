<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar novo aluno</title>
    <style>
        label{
            float: left;
            display: block;
            width: 90px;
        }
    </style>
</head>
<body>

    <form action="{{ route('salvar_aluno') }} " method="post">
    @csrf
        <div><label for="nome">Nome</label><input type="text" name="nome" id="nome" required></div>
        <div><label for="email">E-mail</label><input type="email" name="email" id="email" required></div>
        <div><label for="data_nascimento">Data de Nascimento</label><input type="date" name="data_nascimento" id="data_nascimento"></div>   
        <br>
        <div><label for="curso">Curso</label><select name="curso" id="curso" required>
        @foreach($cursos as $curso) 
        <option value="{{$curso->titulo}}">{{$curso->titulo}}</option>
        @endforeach
        </select></div>     
        <button type="submit">Salvar</button>
    </form>
</body>
</html>