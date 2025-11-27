<?php

    require_once("config.inc.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM veiculos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    if($dados = mysqli_fetch_array($resultado)){
        $id = $dados['id'];
        $marca = $dados['marca'];
        $modelo = $dados['modelo'];
        $ano = $dados['ano'];
    }

?>

<h1>Alteração de Cliente</h1>
<form action="?pg=altera-veiculo" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    
    Valor: <input type="text" name="valor" value="Adicione o Novo Valor"><br>

    <input type="submit" value="Alterar">
</form>