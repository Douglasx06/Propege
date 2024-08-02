<?php
require 'conexao.php';

$sql = "SELECT id, assuntos, detalhes FROM eventos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="assunto-item">';
        echo '<strong>' . htmlspecialchars($row["assuntos"]) . '</strong>';
        echo '<p>' . htmlspecialchars($row["detalhes"]) . '</p>';
        echo '<button onclick="removeAssunto(' . $row["id"] . ')">Excluir</button>';
        echo '</div>';
    }
} else {
    echo 'Nenhum assunto encontrado.';
}

// Fecha a conexão
$conn->close();
?>