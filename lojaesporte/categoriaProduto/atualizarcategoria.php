<!DOCTYPE html>
<html>
    <head>
        <title>Categoria do produto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="principal.php?pagina=categoriaProduto/alterarcategoriaupdate&id=<?php echo $id ?>" method="POST">
            
            Nome:<br>
            <input type="text" name="Nome" placeholder="Nome" value="<?php echo $nome ?>">
            <br>
            Categoria:<br>
            <input type="text" name="Categoria" placeholder="Categoria" value="<?php echo $categoria ?>">
            <br>
            <input type="submit" value="Editar">

        </form> 
    </body>
</html>



