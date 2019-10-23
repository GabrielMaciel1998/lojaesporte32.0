<?php
require 'conexao.php';

$id=$_GET["id"];
$nome=$_POST["nome"];
$descricao=$_POST["descricao"];
$preco=$_POST["preco"];
$categoria=$_POST["categoria"];
$arquivo=$_FILES["nomeimagem"];
$nomeArquivo = $arquivo["name"];

$comandoproduto="UPDATE cadastroproduto SET Nome='$nome',Descricao='$descricao', preco='$preco', categoria='$categoria', nomeimagem='$nomeArquivo' WHERE id='$id'";
$resultproduto= mysqli_query($conexao, $comandoproduto);
if($resultproduto == TRUE){
    echo "Produto atualizado com sucesso";
} else {
    echo "Produto não atualizado com sucesso";
    echo mysqli_error($conexao);
}

   move_uploaded_file($_FILES["nomeimagem"]['tmp_name'], 'cadastroProduto/uploadLoja/' . $_FILES["nomeimagem"]["name"]);

?>
<br>
<a href="principal.php?pagina=cadastroProduto/visualizadorproduto">Lista de Produtos Atualizada</a>

