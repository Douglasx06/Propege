<?php
require "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['inputNome'];
    $pass = $_POST['inputSenha'];

    $sql = "SELECT * FROM user WHERE clientes = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['clientes'])) {
            echo "Bem Vindo, " . htmlspecialchars($user) . ".";
        } else {
            echo "senha inválida.";
        }
    } else {
        echo "No user found with that username.";
    }

    $stmt->close();
}

$conn->close();
?>
