<?php
require "conexao.php";
$descricao = $_POST["descricao"];
$nome = $_POST["nome"];
$preco=$_POST["preco"];
$file = $_FILES["arquivo"];
$enviar = $_POST["enviar"];
$categoria = $_POST["categoria"];

$nomeArquivo = $_FILES["arquivo"]["name"];

$comando = "INSERT INTO cadastroproduto (Nome,Descricao,Preco,categoria,nomeimagem) values ('$nome', '$descricao','$preco','$categoria','$nomeArquivo')";
$resultado = mysqli_query($conexao, $comando);
if($resultado == true) {
    echo "Deu certo o cadastro!";
} else {
    echo "Deu errado o cadastro!"."<br>";
    echo mysqli_error($conexao);
}
if (isset($_POST['enviar'])) {
    move_uploaded_file($_FILES["arquivo"]['tmp_name'], 'cadastroProduto/uploadLoja/' . $_FILES["arquivo"]["name"]);
}
?>
<br>
<a href="principal.php?pagina=cadastroProduto/visualizadorproduto">Lista de Produtos</a>
<br>

