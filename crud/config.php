<?php
$host = 'localhost';
$db = 'ludofashion';
$user = 'root'; // Usuário padrão para instalações locais
$pass = ''; // Sem senha

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Conexão falhou: ' . $e->getMessage());
}
?>
