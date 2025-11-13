<?php 
require "admin/config.inc.php"; // conexão com o banco

// Verifica se o formulário foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $valor = $_POST['valor'];

    // Monta o SQL
    $sql = "INSERT INTO veiculos (marca, modelo, ano, valor) 
            VALUES ('$marca', '$modelo', '$ano', '$valor')";

    // Executa e verifica se deu certo
    if (mysqli_query($conexao, $sql)) {
        $mensagem = "<span style='color:green; font-weight:bold;'>✅ Veículo cadastrado com sucesso!</span>";
    } else {
        $mensagem = "<span style='color:red;'>❌ Erro ao salvar: " . mysqli_error($conexao) . "</span>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚗 Cadastro de Veículos</title>
    <link rel="stylesheet" href=".css">
</head>
<body>

    <div class="container">
        <h1>🚗 Cadastro de Veículos</h1>

        <form action="" method="post">
            <input type="text" name="marca" placeholder="Marca" required>
            <input type="text" name="modelo" placeholder="Modelo" required>
            <input type="number" name="ano" placeholder="Ano" required>
            <input type="number" name="valor" placeholder="Valor (R$)" step="0.01" required>
            <input type="submit" value="Cadastrar Veículo">
        </form>
        <?php if(!empty($mensagem)): ?>
            <p class="mensagem"><?= $mensagem ?></p>
        <?php endif;?>
    </div>
</body>
</html>
