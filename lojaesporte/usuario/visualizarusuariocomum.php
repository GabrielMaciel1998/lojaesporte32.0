<?php
require 'conexao.php';
if(isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 1;
}
if($pagina == 0){
    $pagina=1;
}
$usuarioc="select * from usuario";
$comumm= mysqli_query($conexao, $usuarioc);
$total_registros= mysqli_num_rows($comumm);
$registro_por_paginas = 2;  
$quantidade_paginas = ceil($total_registros/$registro_por_paginas);
$comum = ($registro_por_paginas * $pagina) - $registro_por_paginas;
$sql = "Select * from usuario limit $comum,$registro_por_paginas";
$logado = mysqli_query($conexao, $sql);
while ($registro = mysqli_fetch_assoc($logado)) {
    echo "idusuario: " . $registro["idusuario"] . "<br>";
    echo "nome: " . $registro["nome"] . "<br>";
    echo "sobrenome: " . $registro["sobrenome"] . "<br>";
    echo "email: " . $registro["email"] . "<br>";
    echo "senha: " . $registro["senha"] . "<br>";
    echo "telefone: ". $registro["telefone"]."<br>";
    echo "Data de nacimento:".$registro["nascimento"];
    echo "<br>";
    echo "Sexo:".$registro["sexo"];
    echo "<br>";
     echo "<a href='principal.php?pagina=usuario/selecionarUmUsuario&id=". $registro["idusuario"] ."'>Selecionar Usuario</a>";
    echo "<br> ";
     echo "<a href='principal.php?pagina=usuario/deleteusuario&id=".$registro['idusuario']."'>Apagar</a><br>";
    echo "<a href='principal.php?pagina=usuario/alteraruc_controll&idusuario=".$registro['idusuario']."'>alterar usuario </a><hr>";
}
?>
<br>
<a href="principal.php?pagina=usuario/visualizarusuariocomum&index=<?php echo $pagina - 1; ?>">Voltar pagina</a>
<a href="principal.php?pagina=usuario/visualizarusuariocomum&index=<?php echo $pagina + 1; ?>">Proxima pagina</a>
<br>
<a href="principal.php?pagina=usuario/formulario_cadastro_usuario">Cadastrar Usuario</a>


