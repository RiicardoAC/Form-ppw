<?php
    include('conexao.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $contato = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO  usuarios('nome', 'email', 'contato', 'nascimento') VALUES ('$nome', '$email', '$contato', '$data_nascimento')";

    if(mysqli_query($conexao, $sql))
        echo 'Cadastrado com sucesso';
    else    
        echo "Erro". mysqli_connect_error($conexao);

    mysqli_close($conexao);
?>