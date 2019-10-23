
        <form method="POST" action="principal.php?pagina=venda/atualizarvendaupdate&id=<?php echo $id ?>">
           Nome:<input type="text" name="nome" placeholder="nome" value="<?php echo $nome ?>">
            <br>
            Valor:<input type="text" name="valor" placeholder="valor" value="<?php echo $valor ?>">
            <br>
            descricaovenda:<input type="text" name="descricaovenda" placeholder="descricaovenda" value="<?php echo $descricaovenda ?>">
            <br>
            <input type="submit">
        </form>
    </body>
</html>

