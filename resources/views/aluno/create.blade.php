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

    <form action="" method="post">
    @csrf
        <div><label for="nome">Nome</label><input type="text" name="nome" id="nome"></div>
        <div><label for="email">E-mail</label><input type="text" name="email" id="email"></div>
        <div><label for="data_nascimento">Data de Nasciemnto</label><input type="text" name="data_nascimento" id="data_nascimento"></div>        
        <button type="submit">Salvar</button>
    </form>    
</body>
</html>