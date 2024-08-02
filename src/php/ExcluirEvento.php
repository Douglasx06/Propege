<?php

require 'conexao.php';

$stmt = $conn->prepare("DELETE FROM eventos WHERE id = ?");
$stmt->bind_param("i", $id);

// Define o parâmetro e executa
$id = $_POST['id'];
$stmt->execute();

echo "Evento excluído com sucesso!";

// Fecha a conexão
$stmt->close();
$conn->close();
?>