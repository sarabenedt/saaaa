<?php
include 'config.php'; 
//verifica se o parametro id foi passado pra url
if (!isset($_GET['id'])) {
    die('ID não fornecido.');
}
//obtem o valor do parametro url
$id = $_GET['id'];
//Prepara uma consulta SQL para selecionar todos os campos da tabela 'categorias' onde o 'id' corresponde ao valor fornecido.
$stmt = $pdo->prepare("SELECT * FROM categorias WHERE id = :id");
$stmt->execute(['id' => $id]);
//obtem o resultado do array
$categoria = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$categoria) {
    die('Categoria não encontrada.');
}
// Verifica se o formulário foi enviado via método POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //novo nome
    $nome = $_POST['nome'];
       // Prepara uma consulta SQL para atualizar o nome da categoria na tabela 'categorias' onde o 'id' corresponde ao valor fornecido.
    $stmt = $pdo->prepare("UPDATE categorias SET nome = :nome WHERE id = :id");
    $stmt->execute(['nome' => $nome, 'id' => $id]);
    //redireciona o usuario a pagina principal
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
     <!-- Formulário para editar o nome da categoria. O método é POST e o valor atual do nome é pré-preenchido no campo de texto. -->
    <form method="POST">
        <input type="text" name="nome" value="<?php echo htmlspecialchars($categoria['nome']); ?>" required>
        <button type="submit">Atualizar</button>
    </form>
     <!-- Link para voltar à página anterior. -->
    <a href="categoria.php">Voltar</a>
</body>
</html>
