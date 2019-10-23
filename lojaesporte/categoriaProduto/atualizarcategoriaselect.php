<?php

require "conexao.php";

$id=$_GET["id"];

$categoriaresult="select * from categoriaprodutos where id='$id'";
$resultado=mysqli_query($conexao,$categoriaresult);
$resposta_categoria=mysqli_fetch_assoc($resultado);

$nome=$resposta_categoria['Nome'];
$categoria=$resposta_categoria['Categoria'];

require "categoriaProduto/atualizarcategoria.php";
?>