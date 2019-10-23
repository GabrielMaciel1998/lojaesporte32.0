<?php

require "conexao.php";

$id=$_GET["id"];
$nome = $_POST["Nome"];
$Categoria = $_POST["Categoria"];

$md = "UPDATE categoriaprodutos SET Nome='$nome',Categoria='$Categoria' where id='$id'";
$resultado_categoria = mysqli_query($conexao, $md);

if($resultado_categoria == TRUE){
    echo "categoria atualizada";
   
} else {
    
    echo "Categoria nao atualizada";
    echo mysqli_error($conexao);
}
?>
<br>
<a href="principal.php?pagina=categoriaProduto/visualizarcategoriaproduto">Veja as categorias </a>
