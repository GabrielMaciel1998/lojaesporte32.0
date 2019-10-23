<?php

require "conexao.php";

$id=$_GET["id"];
$nome = $_POST["nome"];
$valor = $_POST["valor"];
$descricaovenda = $_POST["descricaovenda"];

$mst = "UPDATE venda SET nome='$nome',valor='$valor',descricaovenda='$descricaovenda' where id='$id'";
$resultado_venda = mysqli_query($conexao, $mst);

if($resultado_venda == TRUE){
    echo "Venda atualizada";
   
} else {
    
    echo "Venda nao atualizada";
    echo mysqli_error($conexao);
}
?>
<br>
<a href="principal.php?pagina=venda/visualizarvenda">Veja as vendas atualizadas </a>


