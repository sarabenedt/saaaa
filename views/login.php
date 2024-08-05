
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>LudoFashion - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
    <link rel="shortcut icon" href="../imagens/Logo de Loja de Roupas Femininas Estilo Minimalista (3).png" type="image/x-icon">
    <script src="../js/script.js" defer></script>
</head>

<body>
    <header>
        <button id="button"><img src="../imagens/menu.png" alt="Menu" width="30px" onclick="barra_lateral()" id="btn-lateral"></button>
        <a href="../html/index.php" class="ludo">
            <h1>LudoFashion</h1>
        </a>
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="buscar...">
            <button type="submit" id="btn-buscar"><img src="../imagens/search1.png" alt="Buscar" width="30px"></button>
        </form>
        <a href="../views/cadastro.php" class="icon-link">
            <img src="../imagens/account_circle_24dp_FILL0_wght400_GRAD0_opsz24 (3).png" alt="Cadastrar" width="40px">
            cadastre-se
        </a>
        <a href="../views/duvidas.php" class="icon-link">
            <img src="../imagens/help_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="Dúvidas" width="40px">
            dúvidas
        </a>
    </header>

    <nav>
        <a href="">Catálogo</a>
        <a href="">Sobre a loja</a>
    </nav>

    <main>
        <section id="banner">
            <div id="txt-banner"></div>
        </section>
        <div class="container">
            <div class="content">
                <!--FORMULÁRIO DE LOGIN-->
                <div id="login">
                    <form method="post" action="login.php">
                        <h1 class="com">Login</h1>
                        <div class="box-login">
                            <label class="ok" for="email_login">Email</label>
                            <input class="email_login" name="email_login" required="required" type="text" width="40px" />
                        </div>
                        <div class="box-login">
                            <label class="ok" for="senha_login">Senha</label>
                            <input class="email_login" name="senha_login" required="required" type="password" />
                        </div>
                        <p>
                            <button class="sarinha" type="submit">Login</button>
                        </p>
                        <h2 class="okay">Ou</h2>
                        <div class="img">
                            <img src="../imagens/download.png" alt="">
                            <div class="img">
                                <img src="../imagens/download (1).png" alt="">
                            </div>
                        </div>
                        <p class="okay">
                            Ainda não tem conta? 
                        </p>
                        <p class="okay">
                            <a href="../views/cadastro.php">Cadastre-se</a>
                        </p>
                    </form>
                    <?php if(isset($error)): ?>
                        <p class="error"><?= $error; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
