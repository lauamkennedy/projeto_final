<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
</head>
<body>
    <h2>Painel Administrativo</h2>


    <nav>
        <a href="?pg=index">Inicio</a>
        <a href="?pg=veiculos">Veiculos Cadastrados</a>
    </nav>
</body>
</html>


<?php
    // Verifica se existe o parâmetro pg
    if (!isset($_GET['pg']) || empty($_GET['pg'])) {
        $pagina = "principal.php"; // Página inicial
    } else {
        $pagina = $_GET['pg'] . ".php"; // Adiciona .php 
    }

    // Verifica se o arquivo existe antes de incluir
    if (file_exists($pagina)) {
        include_once $pagina;
    } else {
        echo "<h3>Página não encontrada!</h3>";
    }
?>

