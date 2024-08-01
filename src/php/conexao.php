<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "propege";

$conn = new mysqli($server, $user, $pass, $bd);

if($conn->connect_error) {
    die("conexao falhou: " . $conn->connect_error);
}
?>