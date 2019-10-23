<?php
require "conexao.php";
$id = $_GET["idusuario"];
$sobrenome = $_POST["sobrenome"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$sexo=$_POST["sexo"];
$nascimento = $ano . "-" . $mes . "-" . $dia;
$sql = ("UPDATE usuario SET nome='$nome',sobrenome ='$sobrenome',email='$email',senha='$senha',telefone='$telefone',nascimento='$nascimento',sexo='$sexo' where idusuario='$id'");
$resultado = mysqli_query($conexao, $sql);
if ($resultado == TRUE) {
    echo "Usuario atualizado com sucesso";
} else {
    echo "Usuario não atualizado com sucesso";
    echo mysqli_error($conexao);
}
$fecha = mysqli_close($conexao);

?>
<br>
<a href="principal.php?pagina=usuario/visualizarusuariocomum">Lista de Usuarios</a>

