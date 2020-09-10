<?php
include("conexao.php");
session_start();

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
$idade = mysqli_real_escape_string($conexao, $_POST['idade']);

// $query = "select nome from usuario where nome = '{$nome}'";

$query = "select nome from usuario where nome = '{$nome}'";
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row > 0){
    $_SESSION['nome'] = $nome;
    header('Location: main.php');
    exit();
}
else{
    header('Location: index.html');
}
