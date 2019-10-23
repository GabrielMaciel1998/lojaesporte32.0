<?php

require "conexao.php";

$id = $_GET["id"];
$comando = "SELECT * FROM usuario WHERE idusuario='$id'";
$resultado = mysqli_query($conexao, $comando);
$registro= mysqli_fetch_assoc($resultado);

echo $registro["idusuario"];
echo "<br>";
echo "Nome:".$registro["nome"];
echo "<br>";
echo "Sobrenome:".$registro["sobrenome"];
echo "<br>";
echo "Email:".$registro["email"];
echo "<br>";
echo "Senha:".$registro["senha"];
echo "<br>";
echo "telefone:".$registro["telefone"];
echo "<br>";
echo "Data de Nascimento:".$registro["nascimento"];
echo "<br>";
echo "Sexo:".$registro["sexo"];
?>
<br>
<a href="principal.php?pagina=usuario/visualizarusuariocomum">Lista de Usuarios</a>


