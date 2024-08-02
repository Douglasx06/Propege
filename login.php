<?php
require "src/php/conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];

    $sql = "SELECT senha FROM clientes WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['senha'];

        if (password_verify($senha, $hashedPassword)) {
            header("Location: Paginalogin.html");
            exit();
        } else {
            echo "Senha inválida.";
        }
    } else {
        echo "Nenhum usuário encontrado com esse e-mail.";
    }

    $stmt->close();
}

$conn->close();
?>
