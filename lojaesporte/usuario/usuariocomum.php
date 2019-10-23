<?php
require "conexao.php";

$nome=$_POST["nome"];
$sobrenome=$_POST["sobrenome"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$telefone=$_POST["telefone"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$nascimento = $ano . "-" . $mes . "-" . $dia;
$sexo=$_POST["sexo"];
$terminal="insert into usuario (nome,sobrenome,email,senha,telefone, nascimento,sexo) values('$nome','$sobrenome','$email','$senha','$telefone', '$nascimento','$sexo')";
$resultado= mysqli_query($conexao, $terminal);
if ($resultado== TRUE){
    echo "seus dados estão no nosso sistema";
}else{
    echo "algo deu errado";
    echo mysqli_error($conexao); 
}
?>
<br>
<a href="principal.php?pagina=usuario/visualizarusuariocomum">Lista de Usuarios</a>
