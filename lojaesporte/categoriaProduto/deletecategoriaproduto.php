<?php
require "conexao.php";
$id=$_GET["id"];
$comando2= "delete from categoriaprodutos where id='$id'";
$logon= mysqli_query($conexao, $comando2);
if($logon== true){
    echo "Categoria deletada com sucesso";
} else {
    echo "Categoria nao deletada com sucesso";
}

?>
<br>
<a href="principal.php?pagina=categoriaProduto/visualizarcategoriaproduto">Veja as categorias </a>
