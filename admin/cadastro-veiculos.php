<?php 

require "config.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $placa = $_POST['placa'];
    $cadastrador = $_POST['cadastrador'];

    $sql = "INSERT INTO veiculos (marca, modelo, ano, placa, cadastrador) VALUES ('$marca', '$modelo', '$ano', '$placa', '$cadastrador')";
   
    if (mysqli_query($conexao, $sql)){
        echo "<h2>Cadastro enviado com sucesso</h2>";
    } else{
        echo "<h2>Erro ao enviar cadastro" . mysqli_error($conexao) . "</h2";
    }
}

$resultado = mysqli_query($conexao, "SELECT * FROM veiculos ORDER BY id DESC");
$veiculos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚗 Cadastro de Veículos</title>
</head>
<body>
    <h1>Cadastrar Veiculo</h1>

    <form action="" method="post">
        Marca <input type="text" name="marca" >
        Modelo <input type="text" name="modelo" >
        Ano <input type="number" name="ano" >
        Placa <input type="text" name="placa" >
        Cadastrador <input type="text" name="cadastrador" >
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>