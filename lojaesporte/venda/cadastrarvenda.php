<?php
require "conexao.php";

$descricao = $_POST["descricaovenda"];
$nome = $_POST["nome"];
$valor = $_POST["valor"];
$comando1 = "INSERT INTO venda (Nome,valor,descricaovenda) values ('$nome', '$valor','$descricao')";
$resultes = mysqli_query($conexao, $comando1);
if ($resultes == TRUE) {
    echo "OK" . "<br>";
} else {
    echo "algo de errado";
    echo mysqli_error($conexao);
}
?>
<br>
<a href="principal.php?pagina=venda/visualizarvenda">vendas feitas!!!</a>
<br>

