<?php

require "conexao.php";
$id = $_GET["id"];
$result_usuario = "Delete FROM usuario where idusuario='$id'";
$resposta = mysqli_query($conexao, $result_usuario);
if ($resposta == TRUE) {
    echo "Usuario deletado com sucesso";
} else {
    echo "Usuario não  deletado com sucesso";
}
?>
<br>
<a href="principal.php?pagina=usuario/visualizarusuariocomum">Lista de Usuarios</a>
