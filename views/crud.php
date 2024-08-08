<?php
// Configurações do banco de dados
$host = 'localhost';      // Endereço do servidor MySQL
$db   = 'ludofashion';    // Nome do banco de dados
$user = 'root';           // Nome de usuário do banco de dados (o padrão no XAMPP é 'root')
$pass = '';               // Senha do banco de dados (deixe em branco no XAMPP por padrão)
$charset = 'utf8mb4';     // Conjunto de caracteres

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Criação da conexão PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Tratamento de erro de conexão
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
