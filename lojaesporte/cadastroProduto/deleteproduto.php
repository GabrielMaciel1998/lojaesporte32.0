<?php

require "conexao.php";
$id = $_GET["id"];
$result_produto = "Delete FROM cadastroproduto where id='$id'";
$resposta = mysqli_query($conexao, $result_produto);
if ($resposta == TRUE) {
    echo "Produto deletado com sucesso";
} else {
    echo "Produto não deletado com sucesso";
}
?>
<br>
<a href="principal.php?pagina=cadastroProduto/visualizadorproduto">Lista de Produtos</a>
