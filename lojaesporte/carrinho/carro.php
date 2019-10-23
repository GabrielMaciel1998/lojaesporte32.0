<h1>Carrinho de Compras</h1>
<?php
session_start();
require 'conexao.php';

$idProduto = $_GET["id"];

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (!isset($_SESSION["carrinho"])) {
        $vetorIdProdutos = array();
    } else {
        $vetorIdProdutos = $_SESSION["carrinho"];
    }

    $vetorIdProdutos[] = $id;
    $_SESSION["carrinho"] = $vetorIdProdutos;
}

foreach ($_SESSION["carrinho"] as $idProduto) {
    $comando = "SELECT * FROM cadastroproduto WHERE id=$idProduto";
    $result = mysqli_query($conexao, $comando);
   
    echo "<pre>";
    $resultado = mysqli_fetch_assoc($result);
    echo "nome do produto:" . $resultado ["Nome"];
    echo "<br>";
    echo "Descrição:" . $resultado ["Descricao"];
    echo "<br>";
    echo "Preço:" . $resultado ["preco"];
}

?>
<br>
<a href="principal.php?pagina=carrinho/destruir_sessao">destroi</a>
