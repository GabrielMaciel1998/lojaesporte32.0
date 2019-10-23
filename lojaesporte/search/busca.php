<?php

require "conexao.php";
$busca = $_POST["busca"];
$sql = "select  * from cadastroproduto where Nome like '%$busca%';";
$resultado = mysqli_query($conexao, $sql);
while ($dado = mysqli_fetch_assoc($resultado)) {
    echo "Nome:".$dado["Nome"]."<br>";
}
?>

