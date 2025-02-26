<?php
require 'conexao.php'; // Conectar ao banco de dados

// Verificar se o ID foi passado na URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Notícia não encontrada.");
}

$id = intval($_GET['id']); // Garantir que o ID seja um número inteiro

// Buscar a notícia pelo ID
$sql = "SELECT titulo, conteudo, DATE_FORMAT(data_publicacao, '%d/%m/%Y') as data FROM noticias WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $noticia = $result->fetch_assoc();
} else {
    die("Notícia não encontrada.");
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($noticia['titulo']); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="noticias.php">Notícias</a></li>
                <li><a href="#">Candidaturas</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contactos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="noticia">
            <h1><?php echo htmlspecialchars($noticia['titulo']); ?></h1>
            <p><strong>Publicado em:</strong> <?php echo $noticia['data']; ?></p>
            <p><?php echo nl2br(htmlspecialchars($noticia['conteudo'])); ?></p>
        </section>
    </main>
</body>
</html>
