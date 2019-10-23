<?php
require "conexao.php";
$idusuario=$_GET["idusuario"];
$sd= ("select * from usuario where idusuario='$idusuario'");
$costa=mysqli_query($conexao, $sd);
$resposta_usuario= mysqli_fetch_assoc($costa);
$nome=$resposta_usuario['nome'];
$sobrenome=$resposta_usuario['sobrenome'];
$email=$resposta_usuario['email'];
$telefone=$resposta_usuario['telefone'];
$senha=$resposta_usuario['senha'];
$nascimento=$resposta_usuario['nascimento'];
$sexo=$resposta_usuario['sexo'];
require "usuario/alterar_uc.php";
?>

