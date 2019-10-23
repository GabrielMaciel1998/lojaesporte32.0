<?php

require "conexao.php";

$nome = $_POST["Nome"];
$Categoria = $_POST["Categoria"];

$rotulo = "insert into categoriaprodutos(Nome,Categoria) values('$nome','$Categoria')";
$local = mysqli_query($conexao, $rotulo);
if ($local == TRUE) {
    echo "OK"."<br>";
} else {
    echo "Categoria incorreta";
    echo mysqli_error($conexao);
}
?>
<br>
<a href="principal.php?pagina=categoriaProduto/visualizarcategoriaproduto">Categoria dos Produtos</a>

