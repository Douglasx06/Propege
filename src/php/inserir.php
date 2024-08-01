<?php
require "conexao.php";

$nome = $_POST['Nome'];
$email = $_POST["Email"];
$cpf = $_POST["CPF"];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO clientes (usuario, email, cpf, senha) VALUES ('$nome', '$email', '$cpf', '$senha')";

    if($conn->query($sql) === TRUE){
        echo "Registrado com sucesso!! <br>";
    }else {
        echo "Erro: " . $conn->error;
    }


$conn->close();
?>