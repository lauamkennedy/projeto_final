<?php 
require "admin/config.inc.php";


$busca = isset($_GET['busca']) ? mysqli_real_escape_string($conexao, $_GET['busca']) : '';

if ($busca != "") {
    $sql = "
        SELECT * FROM veiculos 
        WHERE marca LIKE '%$busca%'
           OR modelo LIKE '%$busca%'
           OR ano LIKE '%$busca%'
           OR placa LIKE '%$busca%'
    ";
} else {
    $sql = "SELECT * FROM veiculos";
}


$resultado = mysqli_query($conexao, $sql);

$veiculos = [];
while ($row = mysqli_fetch_assoc($resultado)) {
    $veiculos[] = $row;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos Cadastrados</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px 20px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            max-width: 1200px;
            margin: auto;
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0 !important;
            padding: 25px;
            font-size: 1.3rem;
        }

        .card-body {
            padding: 30px;
            background: white;
            border-radius: 0 0 15px 15px;
        }

        .table thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-voltar {
            margin-top: 25px;
            padding: 12px 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            font-weight: 500;
            border-radius: 10px;
        }
        .btn-custom {
            padding: 0 20px;
            border: none;
            color: white;
            font-weight: 500;
            border-radius: 8px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        <h5><i class="fas fa-list"></i> Veículos Cadastrados</h5>
    </div>

    <div class="card-body">


        <form method="GET" class="mb-3">
            <input type="text" name="busca" class="form-control" placeholder="🔍 Buscar por marca, modelo ou ano..." value="<?= htmlspecialchars($busca) ?>">

            <input type="submit" value="Buscar" class="btn btn-primary">
        </form>

        <?php if(count($veiculos) > 0): ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Ano</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($veiculos as $veiculo): ?>
                        <tr>
                            <td><?= htmlspecialchars($veiculo['marca']) ?></td>
                            <td><?= htmlspecialchars($veiculo['modelo']) ?></td>
                            <td><?= htmlspecialchars($veiculo['ano']) ?></td>
                            <td><?= htmlspecialchars($veiculo['placa']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        <?php else: ?>
            <p class="text-center mt-3">Nenhum veículo encontrado!</p>
        <?php endif; ?>

        <a href="index.php" class="btn-voltar">← Voltar à Página Inicial</a>

    </div>
</div>

</body>
</html>
