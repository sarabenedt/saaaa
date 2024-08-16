<?php
include 'config.php'; 
// Verifica se o parâmetro 'id' foi passado via URL. Se não estiver presente, exibe uma mensagem de erro e encerra o script.
if (!isset($_GET['id'])) {
    die('ID não fornecido.');
}
// Obtém o valor do parâmetro 'id' da URL.
$id = $_GET['id'];
// Prepara uma consulta SQL para excluir um registro da tabela 'categorias' com base no valor do 'id' fornecido.
$stmt = $pdo->prepare("DELETE FROM categorias WHERE id = :id");
// Executa a consulta, substituindo o marcador de posição ':id' pelo valor real do 'id'.
$stmt->execute(['id' => $id]);
// Redireciona o usuário para a página 'categoria.php' após a exclusão ser concluída.
header('Location: categoria.php');
?>
