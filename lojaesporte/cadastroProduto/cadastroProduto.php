<?php
require_once "conexao.php";
$sql = "select * from categoriaprodutos;";
$resul = mysqli_query($conexao, $sql);

?>
<form method="POST" action="principal.php?pagina=cadastroProduto/Cadastrarproduto" enctype="multipart/form-data">

    Nome do Produto:<input type="text" name="nome" placeholder="nome">
    <br>

    Descrição: <input type="text" name="descricao" placeholder="descricão">
    <br>

    Preço:<input type="text" name="preco" placeholder="preço">
    <br>
   <select name="categoria">
     <option>categoria</option>
     <?php
      while($categoria = mysqli_fetch_assoc($resul)){
     ?>
       <option value="<?php echo $categoria["id"]; ?>"><?php echo $categoria["Categoria"]; ?></option>
        <?php
      }
     ?>
   </select>
    <br>
    <input type="file" name="arquivo">
    <br>
    <br>
    <input type="submit" value="enviar arquivo" name="enviar"/>
</form>
</div>


</body>
</html>
