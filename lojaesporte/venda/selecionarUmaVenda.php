<?php

require "conexao.php";

$id = $_GET["id"];
$comando = "SELECT * FROM venda WHERE id='$id'";
$resultado = mysqli_query($conexao, $comando);
$registroline= mysqli_fetch_assoc($resultado);

echo $registroline["id"];
echo "<br>";
echo "Nome:".$registroline["nome"];
echo "<br>";
echo "valor:".$registroline["valor"];
echo "<br>";
echo "Descrição da venda: ".$registroline["descricaovenda"]; 
?>
<br>
<a href="principal.php?pagina=venda/visualizarvenda">vendas feitas!!!</a>



