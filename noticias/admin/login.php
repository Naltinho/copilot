<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario === "admin" && $senha === "1234") { // Troque para um sistema seguro
        $_SESSION['admin'] = true;
        header("Location: index.php");
        exit();
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h2>Login Administrativo</h2>
    <?php if (isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario" required>
        
        <label>Senha:</label>
        <input type="password" name="senha" required>
        
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
