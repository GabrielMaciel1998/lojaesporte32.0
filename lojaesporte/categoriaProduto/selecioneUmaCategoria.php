<?php
require "conexao.php";

$id = $_GET["id"];
$comando = "SELECT * FROM  categoriaprodutos WHERE id='$id'";
$resultado = mysqli_query($conexao, $comando);
$result= mysqli_fetch_assoc($resultado);

echo "Nome:".$result["Nome"];
echo "<br>";
echo "categoria:".$result["Categoria"];
echo "<br>";
echo "<a href='principal.php?pagina=categoriaProduto/visualizarcategoriaproduto&id=". $result["id"] ."'>Voltar para a lista de categorias dos Produtos</a>";;
?>

