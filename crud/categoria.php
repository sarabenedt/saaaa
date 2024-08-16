<?php
// Inclui o arquivo de configuração, que contém a conexão com o banco de dados.
include 'config.php';

// Executa uma consulta SQL para selecionar todos os registros da tabela 'categorias'.
$stmt = $pdo->query("SELECT * FROM categorias");

// Obtém todos os registros da consulta como um array associativo.
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Define o conjunto de caracteres como UTF-8 para suportar caracteres especiais. -->
    <meta charset="UTF-8" />
    <title>LudoFashion - Categorias</title>
    <!-- Configura o viewport para uma visualização responsiva em dispositivos móveis. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclui o arquivo CSS para estilização da página. -->
    <link rel="stylesheet" type="text/css" href="../css/categoria.css" />
    <!-- Inclui o arquivo JavaScript, carregado de forma assíncrona após o carregamento da página. -->
    <script src="../js/script.js" defer></script>
    <!-- Define o ícone do atalho da página. -->
    <link rel="shortcut icon" href="../imagens/Logo de Loja de Roupas Femininas Estilo Minimalista (3).png" type="image/x-icon">
</head>
<body>
    <header>
        <!-- Link para a página inicial com o nome da loja como título. -->
        <a href="../html/index.php" class="ludo"><h1>LudoFashion</h1></a>
        <!-- Formulário de busca com um campo de pesquisa e um botão para enviar a pesquisa. -->
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="buscar...">
            <button type="submit" id="btn-buscar"><img src="../imagens/search1.png" alt="" width="30px"></button>
        </form>
        <!-- Ícone do menu hamburguer para navegação em dispositivos móveis. -->
        <div class="hamburger" id="hamburger">
            <!-- Ícone não definido no código, deve ser adicionado via CSS ou JavaScript -->
        </div>
        <!-- Menu de navegação com links para outras páginas e seções do site. -->
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
    <!-- Seção principal da página de categorias. -->
    <div id="categoria">
        <h1 id="um">Categoria</h1>
    </div>
    <div id="back">
        <section class="sara">
            <!-- Loop para exibir todas as categorias. -->
            <?php foreach ($categorias as $categoria): ?>
                <h1 id="margin">
                    <!-- Exibe o nome da categoria, escapando caracteres especiais para segurança. -->
                    <?php echo htmlspecialchars($categoria['nome']); ?>
                    <!-- Link para editar a categoria com o respectivo ícone. -->
                    <a href="upadate.php?id=<?php echo $categoria['id']; ?>">
                        <img id="dois" src="../imagens/edit.png" width="30px" height="30px" alt="Editar">
                    </a>
                    <!-- Link para deletar a categoria com confirmação de exclusão. -->
                    <a href="delete.php?id=<?php echo $categoria['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar?');">
                        <img src="../imagens/delete.png" width="30px" alt="Deletar">
                    </a>
                </h1>
            <?php endforeach; ?>
        </section>
        <!-- Link para adicionar uma nova categoria com o respectivo ícone. -->
        <div id="add">
            <a href="create.php">
                <h1><img id="add" src="../imagens/add.png" alt="" width="30px"> Adicionar categoria</h1>
            </a>
        </div>
    </div>
</body>
</html>
