<?php

require "conexao.php";
if(isset($_GET["index"])) {
    $pagina = $_GET["index"];
} else {
    $pagina = 1;
}
if($pagina == 0){
    $pagina=1;
}
$produto="select * from cadastroproduto";
$result_cadastro= mysqli_query($conexao,$produto);
$total_registros= mysqli_num_rows($result_cadastro);
$registro_por_paginas = 2;  
$quantidade_paginas = ceil($total_registros/$registro_por_paginas); 
$inicio = ($registro_por_paginas * $pagina) - $registro_por_paginas;
$cmd = "select * from cadastroproduto limit $inicio , $registro_por_paginas";
$produtos = mysqli_query($conexao,$cmd); 
$total = mysqli_num_rows($produtos); 
$msl="Select * from cadastroproduto";
$valor=mysqli_query($conexao, $cmd);

while ($variedades = mysqli_fetch_assoc($valor)){
    echo "<br>";
     echo "id: " . $variedades["Id"] . "<br>";
    echo "Nome: " . $variedades["Nome"] . "<br>";
    echo "Descricao: " . $variedades["Descricao"] . "<br>";
    echo "preco : " . $variedades["preco"] . "<br>";
    echo "categoria :". $variedades["categoria"] ."<br>";
    echo "nomeimagem :". $variedades["nomeimagem"] ."<br>";
    echo "<img src='cadastroProduto/uploadLoja/" . $variedades["nomeimagem"] . "' alt=''><br>";
    echo "<a href='principal.php?pagina=cadastroProduto/deleteproduto&id=".$variedades['Id']."'>Apagar</a><br>";
    echo "<a href='principal.php?pagina=cadastroProduto/SelecionaUmProduto&id=". $variedades["Id"] ."'>Selecionar um produto</a>";
    echo "<br>";
    echo "<a href='principal.php?pagina=cadastroProduto/atualizarprodutoselect&id=". $variedades["Id"] ."'>Atualizar produto</a><hr>";
   
}
?>
<br>
<a href="principal.php?pagina=cadastroProduto/visualizadorproduto&index=<?php echo $pagina - 1; ?>">Voltar pagina</a>
<a href="principal.php?pagina=cadastroProduto/visualizadorproduto&index=<?php echo $pagina + 1; ?>">Proxima pagina</a>
<br>
<a href="principal.php?pagina=cadastroProduto/cadastroProduto">Cadastrar Produto</a>

