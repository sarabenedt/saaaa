<?php
include 'config.php';

// Verifica se o ID foi passado na URL
if (!isset($_GET['id'])) {
    die('ID não fornecido.');
}

$id = $_GET['id'];

// Prepara e executa a consulta para buscar a categoria
$stmt = $pdo->prepare("SELECT * FROM categorias WHERE id = :id");
$stmt->execute(['id' => $id]);
$categoria = $stmt->fetch(PDO::FETCH_ASSOC);

// Verifica se a categoria foi encontrada
if (!$categoria) {
    die('Categoria não encontrada.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    
    $stmt = $pdo->prepare("UPDATE categorias SET nome = :nome WHERE id = :id");
    $stmt->execute(['nome' => $nome, 'id' => $id]);
    
    header('Location: categoria.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Categoria</title>
</head>
<body>
    <h1>Editar Categoria</h1>
    <form method="POST">
        <input type="text" name="nome" value="<?php echo htmlspecialchars($categoria['nome']); ?>" required>
        <button type="submit">Atualizar</button>
    </form>
    <a href="categoria.php">Voltar</a>
</body>
</html>

