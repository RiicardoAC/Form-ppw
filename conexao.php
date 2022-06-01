<?php

$servidor = "localhost";
$bdname = "cadastro";
$user = "root";
$senha = " ";

$conexao = mysqli_connect($servidor, $user, $senha, $bdname);

if(!$conexao)
    die("Problemas com a conexão com o banco de dados. Descrição do erro: " . mysqli_connect_error());

?>