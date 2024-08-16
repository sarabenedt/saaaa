<?php
// Inclui o arquivo de configuração, que contém a conexão com o banco de dados.
include 'config.php';

// Verifica se o formulário foi enviado via método POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém o nome da categoria enviado pelo formulário.
    $nome = $_POST['nome'];
    
    // Prepara uma consulta SQL para inserir um novo registro na tabela 'categorias'.
    // O marcador de posição :nome será substituído pelo valor fornecido.
    $stmt = $pdo->prepare("INSERT INTO categorias (nome) VALUES (:nome)");
    
    // Executa a consulta, substituindo o marcador de posição pelo valor real do nome da categoria.
    $stmt->execute(['nome' => $nome]);
    
    // Após a inserção, redireciona o usuário para a página 'categoria.php'.
    header('Location: categoria.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Define o conjunto de caracteres como UTF-8 para suportar caracteres especiais. -->
    <meta charset="UTF-8">
    <title>Adicionar Categoria</title>
</head>
<body>
    <!-- Título da página. -->
    <h1>Adicionar Categoria</h1>
    <!-- Formulário para adicionar uma nova categoria. -->
    <form method="POST">
        <!-- Campo de texto para o nome da categoria. É um campo obrigatório (required). -->
        <input type="text" name="nome" placeholder="Nome da Categoria" required>
        <!-- Botão para enviar o formulário. -->
        <button type="submit">Adicionar</button>
    </form>
    <!-- Link para voltar à página 'categoria.php'. -->
    <a href="categoria.php">Voltar</a>
</body>
</html>
