<?php
// Define as variáveis de conexão com o banco de dados.
$host = 'localhost'; // Nome do host onde o banco de dados está localizado.
$db = 'ludofashion'; // Nome do banco de dados.
$user = 'root'; // Nome de usuário para conectar ao banco de dados.
$pass = ''; // Senha para conectar ao banco de dados (vazio no caso do MySQL padrão).

try {
    // Cria uma nova instância da classe PDO para conectar ao banco de dados MySQL.
    // A string de conexão inclui o host e o nome do banco de dados.
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Configura o PDO para lançar exceções em caso de erro.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Captura qualquer exceção lançada durante a conexão e exibe uma mensagem de erro.
    // O script é encerrado se a conexão falhar.
    die('Conexão falhou: ' . $e->getMessage());
}
?>
