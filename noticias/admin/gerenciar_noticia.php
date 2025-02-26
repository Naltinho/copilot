<?php
require '../conexao.php';

// Verificar se estamos editando uma notícia
$titulo = $conteudo = "";
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id) {
    $sql = "SELECT titulo, conteudo FROM noticias WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $titulo = $row['titulo'];
        $conteudo = $row['conteudo'];
    }
}

// Processar o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    if ($id) {
        $sql = "UPDATE noticias SET titulo=?, conteudo=?, data_publicacao=NOW() WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $titulo, $conteudo, $id);
    } else {
        $sql = "INSERT INTO noticias (titulo, conteudo, data_publicacao) VALUES (?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $titulo, $conteudo);
    }

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao salvar.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title><?php echo $id ? 'Editar' : 'Nova'; ?> Notícia</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h2><?php echo $id ? 'Editar' : 'Nova'; ?> Notícia</h2>
    <form method="POST">
        <label>Título:</label>
        <input type="text" name="titulo" value="<?php echo htmlspecialchars($titulo); ?>" required>
        
        <label>Conteúdo:</label>
        <textarea name="conteudo" required><?php echo htmlspecialchars($conteudo); ?></textarea>
        
        <button type="submit">Salvar</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>
