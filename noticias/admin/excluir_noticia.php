<?php
require '../conexao.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID inválido.");
}

$id = intval($_GET['id']);
$sql = "DELETE FROM noticias WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: index.php");
    exit();
} else {
    echo "Erro ao excluir.";
}
?>
