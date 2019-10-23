<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="POST" action="principal.php?pagina=cadastroProduto/atualizarprodutoupdate&id=<?php echo $id ;?>" enctype="multipart/form-data">
            Nome do Produto:
            <input type="text" name="nome" placeholder="nome" value="<?php echo $nome;?>">
            <br>
            Descrição:
            <input type="text" name="descricao" placeholder="descricão" value="<?php echo $descricao;?>">
            <br>
            Preço:
            <input type="text" name="preco" placeholder="preço" value="<?php echo $preco; ?>">
            <br>
            Categoria:
            <input type="text" name="categoria" placeholder="categoria" value="<?php echo $categoria;?>">
            <br>
            <input type="file" name="nomeimagem" value="<?php echo $arquivo;?>">
            <br>
            <br>
            <input type="submit" value="enviar arquivo" name="enviar"/>
        </form>
    </body>
</html>


