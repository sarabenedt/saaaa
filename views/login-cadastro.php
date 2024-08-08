<?php
session_start(); // Iniciar a sessão

include 'crud.php'; // Incluir arquivo de configuração do banco de dados

$error = ''; // Variável para armazenar mensagens de erro

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar se os campos do formulário estão definidos
    if (isset($_POST['email_login']) && isset($_POST['senha_login'])) {
        $email = $_POST['email_login'];
        $senha = $_POST['senha_login'];

        // Consultar o banco de dados
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();

        // Verificar se o usuário existe e a senha está correta
        if ($usuario && password_verify($senha, $usuario['senha'])) {
            // Iniciar sessão e redirecionar o usuário
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_name'] = $usuario['nome'];
            header("Location: ../views/login.php"); // Redirecionar após login bem-sucedido
            exit;
        } else {
            $error = "Email ou senha inválidos."; // Mensagem de erro
        }
    }
}
?>
