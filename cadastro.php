<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $contato = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $senha = $_POST['senha'];

    echo "Nome: $nome.<br><br>";
    echo "Email: $email.<br><br>";
    echo "Contato: $contato.<br><br>"; 
    echo "Data de nascimento: $data_nascimento.";
?>