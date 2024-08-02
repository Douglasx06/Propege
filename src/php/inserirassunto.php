<?php
require 'conexao.php';

$stmt = $conn->prepare("INSERT INTO eventos (assuntos, detalhes) VALUES (?, ?)");
$stmt->bind_param("ss", $assunto, $detalhes);

// Define os parâmetros e executa
$assunto = $_POST['assunto'];
$detalhes = $_POST['detalhes'];
$stmt->execute();

echo "Evento registrado com sucesso!";

// Fecha a conexão
$stmt->close();
$conn->close();
?>