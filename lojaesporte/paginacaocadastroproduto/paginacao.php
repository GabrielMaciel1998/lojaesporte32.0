<?php
require '../conexao.php';


//logica da variavel de controle pra saber qual pagina esta da paginacao
//logica para inicializar o valor da pagina
if(isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 1;
}
if($pagina == 0){
    $pagina=1;
}
/* Pegar o TOTAL de registros na tabela CadastroProduto! */
$produto="select * from cadastroproduto";
$result_cadastro= mysqli_query($conexao, $produto);
$total_registros= mysqli_num_rows($result_cadastro);

//quantidade de registros por pagina
$registro_por_paginas = 2; 
//quantiade de paginas necessarias para exibir o total de registros, ex: se tiver 200 registros e quero 5 registros por pagina, divido 200/5 e acho a quantidade de paginas
$quantidade_paginas = ceil($total_registros/$registro_por_paginas); 
$inicio = ($registro_por_paginas * $pagina) - $registro_por_paginas;

$cmd = "select * from cadastroproduto limit $inicio , $registro_por_paginas"; 

$produtos = mysqli_query($conexao,$cmd); 
$total = mysqli_num_rows($produtos); 
    
    while ($produto = mysqli_fetch_assoc($produtos)) { 
        echo "nome:" .$produto['Nome']." - "; 
        echo "Descrição:".$produto['Descricao']." - "; 
        echo "Preço:".$produto['preco']." - "; 
        echo "Categoria:".$produto['categoria']."<br />"; 
} 

?>
<a href="paginacao.php?pagina=<?php echo $pagina - 1; ?>">Voltar pagina</a>
<a href="paginacao.php?pagina=<?php echo $pagina + 1; ?>">Proxima pagina</a>





    
