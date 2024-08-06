<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    
    $stmt = $pdo->prepare("INSERT INTO categorias (nome) VALUES (:nome)");
    $stmt->execute(['nome' => $nome]);
    
    header('Location: categoria.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Categoria</title>
</head>
<body>
    <h1>Adicionar Categoria</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome da Categoria" required>
        <button type="submit">Adicionar</button>
    </form>
    <a href="categoria.php">Voltar</a>
</body>
</html>
