<?php
include 'config.php';

// Ler categorias
$stmt = $pdo->query("SELECT * FROM categorias");
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>LudoFashion - Categorias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/categoria.css" />
    <script src="../js/script.js" defer></script>
    <link rel="shortcut icon" href="../imagens/Logo de Loja de Roupas Femininas Estilo Minimalista (3).png" type="image/x-icon">
</head>
<body>
    <header>
        <a href="../html/index.php" class="ludo"><h1>LudoFashion</h1></a>
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="buscar...">
            <button type="submit" id="btn-buscar"><img src="../imagens/search1.png" alt="" width="30px"></button>
        </form>
        <div class="hamburger" id="hamburger">
            &#9776; <!-- Ícone do menu hamburguer -->
        </div>
        <nav class="menu" id="nav-menu">
            <a href="#">Catálogo</a>
            <a href="#">Sobre a loja</a>
            <a href="../views/cadastro.php" class="icon-link">
                <img src="../imagens/account_circle_24dp_FILL0_wght400_GRAD0_opsz24 (3).png" alt="" width="40px"> Cadastre-se
            </a>
            <a href="../views/duvidas.php" class="icon-link">
                <img src="../imagens/help_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" width="40px"> Dúvidas
            </a>
        </nav>
</header>
    <div id="categoria">
        <h1 id="um">Categoria</h1>
    </div>
    <div id="back">
        <section class="sara">
            <?php foreach ($categorias as $categoria): ?>
                <h1 id="margin">
                    <?php echo htmlspecialchars($categoria['nome']); ?>
                    <a href="upadate.php?id=<?php echo $categoria['id']; ?>">
                        <img id="dois" src="../imagens/edit.png" width="30px" height="30px" alt="Editar">
                    </a>
                    <a href="delete.php?id=<?php echo $categoria['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar?');">
                        <img src="../imagens/delete.png" width="30px" alt="Deletar">
                    </a>
                </h1>
            <?php endforeach; ?>
        </section>
        <div id="add">
            <a href="create.php">
                <h1><img id="add" src="../imagens/add.png" alt="" width="30px"> Adicionar categoria</h1>
            </a>
        </div>
    </div>
</body>
</html>
