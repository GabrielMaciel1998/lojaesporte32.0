<?php

$conexao = mysqli_connect("localhost","root", "", "webesportes");
if($conexao != true) {
    echo "Deu errado!";
    echo mysqli_connect_error();
}