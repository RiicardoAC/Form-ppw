<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$contato = $_POST['telefone'];
$genero = $_POST['genero'];
$data_nascimento = $_POST['data_nascimento'];
$qtdIrmaos = $_POST['irmao'];

foreach ($qtdIrmaos as $val) {
    $msg .= $val . ", ";
}

echo "O nome é: $nome,o email é: $email, o contato é: $contato, o gênero é $genero, a data de nascimento é: $data_nascimento e são $msg irmãos.";
?>