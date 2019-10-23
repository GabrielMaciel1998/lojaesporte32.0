<?php

require "conexao.php";
$id = $_GET["id"];
$result_venda = "Delete FROM venda where id='$id'";
$resposta = mysqli_query($conexao, $result_venda);
if ($resposta == TRUE) {
    echo "Venda deletada com sucesso";
} else {
    echo "Venda não deletada com sucesso";
}
?>
<br>
<a href="principal.php?pagina=venda/visualizarvenda">vendas feitas!!!</a>

