<?php
include 'config.php'; // Corrija o caminho conforme sua estrutura de diretórios

// Certifique-se de que o id foi passado corretamente na URL
if (!isset($_GET['id'])) {
    die('ID não fornecido.');
}

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM categorias WHERE id = :id");
$stmt->execute(['id' => $id]);

header('Location: categoria.php');
?>
