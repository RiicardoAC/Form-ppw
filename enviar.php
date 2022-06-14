<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $contato = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $senha = $_POST['senha'];

    echo "Nome: $nome. <br>";
    echo "Email: $email.";
    echo "Contato: $contato."; 
    echo "Data de nascimento: $data_nascimento.";
?>