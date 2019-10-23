<?php
require "conexao.php";

$id=$_GET["id"];

$produtoresult="select * from cadastroproduto where id='$id'";

$resultadoproduto=mysqli_query($conexao, $produtoresult);
$resultado= mysqli_fetch_assoc($resultadoproduto);

 $nome=$resultado["Nome"];
 $descricao=$resultado["Descricao"];
 $preco=$resultado["preco"];
 $categoria=$resultado["categoria"];
 $arquivo=$resultado["nomeimagem"];

require "cadastroProduto/atualizarproduto.php";
?>