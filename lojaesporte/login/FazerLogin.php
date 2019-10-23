<?php
session_start();
require 'conexao.php';
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "select * from usuario where email = '$email' and senha = '$senha'";
$resultado_result= mysqli_query($conexao,$sql);
$resultado_pro = mysqli_fetch_assoc($resultado_result);

if($resultado_pro == NULL) {
    echo "Usuário ou senha invalidos!";
} else {
    
    $_SESSION["logar"] = $resultado_pro["nome"];
    $_SESSION["senha"] = $resultado_pro["senha"];
    $_SESSION["email"] = $resultado_pro["email"];
    
    header("location:principal.php?pagina=login/UsuarioLogado");
}
?>
<br>
<a href="principal.php?pagina=login/formulario">Cadastre-se</a>

    
    
   
