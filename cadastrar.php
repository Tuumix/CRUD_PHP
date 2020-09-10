<?php
    include('conexao.php');

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
    $idade = mysqli_real_escape_string($conexao, $_POST['idade']);

    $query = "insert into usuario(nome, endereco, idade) values('{$nome}', '{$endereco}', '{$idade}')";

    if(mysqli_query($conexao, $query))
    {
        echo "<h1>Cadastro efetuado com sucesso!";
    }
    else
    {
        echo "<h1>Erro ao cadastrar!</h1>";
    }