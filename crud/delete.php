<?php
include 'config.php'; 

if (!isset($_GET['id'])) {
    die('ID não fornecido.');
}

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM categorias WHERE id = :id");
$stmt->execute(['id' => $id]);

header('Location: categoria.php');
?>
