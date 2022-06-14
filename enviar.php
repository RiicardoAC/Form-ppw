<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $contato = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $senha = $_POST['senha'];

    echo "O nome é: $nome,o email é: $email, o contato é: $contato  e a data de nascimento é: $data_nascimento.";
?>