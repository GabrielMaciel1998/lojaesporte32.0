<?php
session_start();
require 'conexao.php';
unset($_SESSION["carrinho"]);
session_destroy();
?>

