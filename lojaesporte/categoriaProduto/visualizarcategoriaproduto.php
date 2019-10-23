<?php
require 'conexao.php';
if(isset($_GET["index"])) {
    $pagina = $_GET["index"];
} else {
    $pagina = 1;
}
if($pagina == 0){
    $pagina=1;
}
$categoria="select * from categoriaprodutos";
$result_categoria= mysqli_query($conexao, $categoria);
$total_registros= mysqli_num_rows($result_categoria);
$registro_por_paginas = 2;  
$quantidade_paginas = ceil($total_registros/$registro_por_paginas); 
$inicio = ($registro_por_paginas * $pagina) - $registro_por_paginas;

$lock = "Select * from categoriaprodutos limit $inicio,$registro_por_paginas";
//$total= mysqli_num_rows($lsk);
$lsk = mysqli_query($conexao, $lock);
while ($sl = mysqli_fetch_assoc($lsk)) {
    echo "id".$sl["id"]."<br>";
    echo "Nome: " . $sl["Nome"] . "<br>";
    echo "Categoria: " . $sl["Categoria"] . "<br>";
     echo "<a href='principal.php?pagina=categoriaProduto/SelecioneUmaCategoria&id=". $sl["id"] ."'>Selecionar um produto</a>";
     echo "<br>";
     echo "<a href='principal.php?pagina=categoriaProduto/deletecategoriaproduto&id=".$sl["id"] ."'>apagar</a><br>";
     echo "<a href='principal.php?pagina=categoriaproduto/atualizarcategoriaselect&id=".$sl["id"] ."'>Atualizar categoria</a><br><hr>";
}
?>
<br>
<a href="principal.php?pagina=categoriaProduto/visualizarcategoriaproduto&index=<?php echo $pagina - 1; ?>">Voltar pagina</a>
<a href="principal.php?pagina=categoriaProduto/visualizarcategoriaproduto&index=<?php echo $pagina + 1; ?>">Proxima pagina</a>
<br>
<a href="principal.php?pagina=categoriaProduto/cadastro_categoria_produto">Cadastro de categoria</a>


