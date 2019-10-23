<html>
    <head>
        <title>Style Sport</title>
        <link rel="stylesheet" href="css/app.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <h1 id="inicial">Style Sports</h1>
        <nav>
            <ul id="menu">
                <li><a href="principal.php?pagina=index2">Home</a></li>
                <li><a href="principal.php?pagina=somos/somos">Quem Somos</a></li>
                <li><a href="principal.php?pagina=login/formulario">Login</a></li>
                <li><a href="principal.php?pagina=cadastroProduto/cadastroProduto">Cadastro do Produtos</a></li>
                <li><a href="principal.php?pagina=usuario/formulario_cadastro_usuario">Cadastro de Usuários</a></li>
                <li><a href="principal.php?pagina=categoriaProduto/cadastro_categoria_produto">Categorias</a></li>
                <li><a href="principal.php?pagina=venda/venda">Vendas</a></li>
            </ul>
        </nav>
        
        <form method="POST" action="principal.php?pagina=search/busca" id="busca">
            Buscar <input type="text" name="busca">
            <button type="submit">buscar</button>
        </form>
        
        <div id="conteudo_principal">

            <?php
            if (isset($_GET["pagina"])) {
                $pag = $_GET["pagina"];
                require $pag . ".php";
            }
            ?>

        </div>

            <?php require "rodape.php" ?>

    </body>
</html>

