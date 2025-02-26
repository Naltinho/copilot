<?php
$servername = "localhost";
$username = "root"; // Altere conforme necessário
$password = ""; // Altere conforme necessário
$database = "banco_noticias";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
