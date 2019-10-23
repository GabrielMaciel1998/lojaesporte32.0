<?php

require "conexao.php";

$id=$_GET["id"];

$vendaresult="select * from venda where id='$id'";
$resultado=mysqli_query($conexao,$vendaresult);
$resposta_venda=mysqli_fetch_assoc($resultado);

$nome=$resposta_venda['nome'];
$valor=$resposta_venda['valor'];
$descricaovenda=$resposta_venda['descricaovenda'];

require "venda/atualizarvenda.php";
?>

