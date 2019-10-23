<?php
session_start();
if(!isset($_SESSION["logar"])){  
    header("location:principal.php?pagina=login/formulario");
}
?>

<h1>Seja bem vindo a loja que mais cresce no Brasil!!</h1>
<a href="principal.php?pagina=login/fazerLogout">Fazer Logout</a>
<br>
<?php
$email = $_SESSION["email"];
echo "Bem vindo $email";

?>
