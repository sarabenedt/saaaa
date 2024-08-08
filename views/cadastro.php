<?php
include 'crud.php'; // Ajuste o caminho conforme necessário

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar se os campos do formulário estão definidos
    if (isset($_POST['name']) && isset($_POST['email_login']) && isset($_POST['senha_login']) &&
        isset($_POST['telefone']) && isset($_POST['cpf']) && isset($_POST['data_nascimento'])) {

        // Receber dados do formulário
        $nome = $_POST['name'];
        $email = $_POST['email_login'];
        $senha = password_hash($_POST['senha_login'], PASSWORD_DEFAULT); // Criptografar senha
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];
        $data_nascimento = $_POST['data_nascimento'];

        // Inserir dados no banco de dados
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, telefone, cpf, data_nascimento) VALUES (?, ?, ?, ?, ?, ?)");
}
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <script src="../js/script.js" defer></script>
</head>

<body>
    <header>
        <a href="../html/index.php" class="ludo">
            <h1>LudoFashion</h1>
        </a>
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="buscar...">
            <button type="submit" id="btn-buscar"><img src="../imagens/search1.png" alt="" width="30px"></button>
        </form>
        <a href="" class="icon-link">
            <img src="../imagens/account_circle_24dp_FILL0_wght400_GRAD0_opsz24 (3).png" alt="" width="40px">
            Cadastre-se
        </a>
        <a href="../views/duvidas.php" class="icon-link">
            <img src="../imagens/help_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" width="40px">
            Dúvidas
        </a>
    </header>
    <nav>
        <a href="">Catálogo</a>
        <a href="../views/sobre.php">Sobre a loja</a>
    </nav>
    <div class="content">
        <!-- FORMULÁRIO DE CADASTRO -->
        <div id="login">
            <h1 class="com">Cadastre-se</h1>
            <form class="sara" method="post" action="">
                <div class="box-login">
                    <label class="ok" for="name">Nome:</label>
                    <input class="email_login" name="name" required="required" type="text" />
                </div>
                <div class="box-login">
                    <label class="ok" for="email_login">Email:</label>
                    <input class="email_login" name="email_login" required="required" type="email" />
                </div>
                <div class="box-login">
                    <label class="ok" for="senha_login">Senha:</label>
                    <input class="email_login" name="senha_login" required="required" type="password" />
                </div>
                <div class="box-login">
                    <label class="ok" for="telefone">Número de Telefone:</label>
                    <input class="email_login" name="telefone" required="required" type="tel" />
                </div>
                <div class="box-login">
                    <label class="ok" for="cpf">CPF:</label>
                    <input class="email_login" name="cpf" required="required" type="text" />
                </div>
                <div class="box-login">
                    <label class="ok" for="data_nascimento">Data de Nascimento:</label>
                    <input class="email_login" name="data_nascimento" required="required" type="date" />
                </div>
                <p>
                    <button class="sarinha" type="submit">Cadastrar</button>
                </p>
                <p class="okay">
                    <a href="../views/login.php">Já tem uma conta cadastrada?</a>
                </p>
                <h2 class="okay">Ou</h2>
                <div class="img">
                    <img src="../imagens/download.png" alt="">
                    <div class="img">
                        <img src="../imagens/download (1).png" alt="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>