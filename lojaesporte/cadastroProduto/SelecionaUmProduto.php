<link rel="stylesheet" type="text/css" href="css/app.css">
<?php
require "conexao.php";

$id = $_GET["id"];
$comando = "SELECT * FROM cadastroproduto WHERE id='$id'";
$resultado = mysqli_query($conexao, $comando);
$resolução = mysqli_fetch_assoc($resultado);

echo $resolução["Id"];
echo "<br>";
echo "Nome:" . $resolução["Nome"];
echo "<br>";
echo "Descricao:" . $resolução["Descricao"];
echo "<br>";
echo "preco:" . $resolução["preco"];
echo "<br>";
echo "categoria:" . $resolução["categoria"];
echo "<br>";
echo "nomeimagem:" . $resolução["nomeimagem"];
?>
<br>
<img src="cadastroProduto/uploadLoja/<?php echo $resolução["nomeimagem"] ?>" alt="Não carregou">
<br>

<br>
<div id="carregou">
    <a href="principal.php?pagina=carrinho/carro&id=<?php echo $id; ?>"><img id="compra"src="img/compra.png" alt="compra.png"></a>
</div>
<?php
require 'calculando-frete.php';
?>


        
        <a href="principal.php?pagina=cadastroProduto/visualizadorproduto">Voltar a lista de Produtos</a>
    </body>
</html>

