
<?php
require_once "conexao.php";
$sql_produtos = "select * from cadastroproduto;";
$sql_resul = mysqli_query($conexao, $sql_produtos);
?>

<h1 id="pro">Produtos recomendados</h1>
<div id="container">
    <?php
    while ($produto = mysqli_fetch_assoc($sql_resul)) {
        ?>
        <div class="item">
            <img id="wilson"src="cadastroProduto/uploadLoja/<?php echo $produto["nomeimagem"]; ?>" alt="nao deu!!">
            <h3><a href="principal.php?pagina=cadastroProduto/SelecionaUmProduto&id=<?php echo $produto ["Id"];?>"> <?php echo $produto["Nome"]?> </a></h3>
            Descrição:<p><?php echo $produto["Descricao"]; ?></p>
            Preço:<p><?php echo $produto["preco"]; ?></p>
        </div>
 
        <?php
    }
    ?>

</div>

</body>
</html>