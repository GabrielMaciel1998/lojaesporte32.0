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

$sqli="select * from venda";
$ver= mysqli_query($conexao, $sqli);
$total_venda= mysqli_num_rows($ver);
$registro_por_paginas = 2;  
$quantidade_paginas = ceil($total_venda/$registro_por_paginas); 
$inicio = ($registro_por_paginas * $pagina) - $registro_por_paginas;
$ven="select * from venda limit $inicio,$registro_por_paginas";
$venda= mysqli_query($conexao, $ven);

while ($vendas= mysqli_fetch_assoc($venda)) {
    echo "id".$vendas["id"]."<br>";
    echo "nome: ".$vendas["nome"]."<br>";
    echo "Valor: ".$vendas["valor"]."<br>";
     echo "Descrição da Venda: ".$vendas["descricaovenda"]."<br>";
     echo "<br>";
     echo "<br>";
     echo "<a href='principal.php?pagina=venda/selecionarUmaVenda&id=". $vendas["id"] ."'>Selecionar uma Venda</a>";
    echo "<br> ";
    echo "<a href='principal.php?pagina=venda/deletevenda&id=".$vendas['id']."'>Apagar</a><br>";
     echo "<a href='principal.php?pagina=venda/atualizarvendaselect&id=".$vendas['id']."'>Altualizar venda</a><br><hr>";
}
?>
<br>
<a href="principal.php?pagina=venda/visualizarvenda&index=<?php echo $pagina - 1; ?>">Voltar pagina</a>
<a href="principal.php?pagina=venda/visualizarvenda&index=<?php echo $pagina + 1; ?>">Proxima pagina</a>
<br>
<a href="principal.php?pagina=venda/venda">Cadastrar venda</a>
