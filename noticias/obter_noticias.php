<?php
header('Content-Type: application/json');
require 'conexao.php'; // Arquivo de conexão com o banco de dados

// Consulta para obter a notícia principal
$sql = "SELECT id, titulo, conteudo, DATE_FORMAT(data_publicacao, '%d/%m/%Y') as data FROM noticias ORDER BY data_publicacao DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $noticia = $result->fetch_assoc();

    // Consulta para obter notícias relacionadas
    $sqlRelacionadas = "SELECT id, titulo FROM noticias WHERE id != {$noticia['id']} ORDER BY data_publicacao DESC LIMIT 3";
    $resultRelacionadas = $conn->query($sqlRelacionadas);
    
    $relacionadas = [];
    while ($row = $resultRelacionadas->fetch_assoc()) {
        $relacionadas[] = [
            "titulo" => $row["titulo"],
            "link" => "noticia.php?id=" . $row["id"]
        ];
    }

    // Retorna os dados em JSON
    echo json_encode([
        "titulo" => $noticia["titulo"],
        "data" => $noticia["data"],
        "conteudo" => $noticia["conteudo"],
        "relacionadas" => $relacionadas
    ]);
} else {
    echo json_encode(["erro" => "Nenhuma notícia encontrada"]);
}

$conn->close();
?>
