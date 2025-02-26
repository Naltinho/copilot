<?php
require '../conexao.php'; // Conectar ao banco

// Buscar todas as notícias
$sql = "SELECT id, titulo, DATE_FORMAT(data_publicacao, '%d/%m/%Y') as data FROM noticias ORDER BY data_publicacao DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <header>
        <h2>Painel Administrativo</h2>
        <a href="gerenciar_noticia.php">+ Nova Notícia</a>
    </header>
    <main>
        <table border="1">
            <tr>
                <th>Título</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['titulo']); ?></td>
                    <td><?php echo $row['data']; ?></td>
                    <td>
                        <a href="gerenciar_noticia.php?id=<?php echo $row['id']; ?>">Editar</a>
                        |
                        <a href="excluir_noticia.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza?');">Excluir</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </main>
</body>
</html>

<?php $conn->close(); ?>
