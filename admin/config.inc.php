<?php 
$conexao = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db ($conexao, "projeto2");

if (!$conexao){
    echo "conexao, mal sucedida";
}

?>