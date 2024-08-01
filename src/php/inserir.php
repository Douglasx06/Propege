<?php
require "conexao.php";

$nome = $_POST["inputNome"];
$email = $_POST["inputEmail"];
$cpf = $_POST["inputCPF"];
$senha = $_POST["inputSenha"];
$confsenha = $_POST["inputConfSenha"];

if($senha == $confsenha){

    $sql = "INSERT INTO clientes (inputNome, inputEmail, inputCPF, inputSenha) VALUES ('$nome', '$email', '$cpf', $senha)";

    if($conn->query($sql) === TRUE){
        echo "Registrado com sucesso!! <br>";
    }else {//Caso de Erro aparecera uma mensagem de erro
        echo "Erro: " . $conn->error;
    }
}else{
    echo "Erro: " . $conn->error;   
}

$conn->close();
?>