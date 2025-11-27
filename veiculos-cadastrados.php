<?php 
require "admin/config.inc.php";

// Consulta
$sql = "SELECT * FROM veiculos";
$resultado = mysqli_query($conexao, $sql);

// Transformar mysqli_result em array
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
            animation: slideIn 0.5s ease-out;
            max-width: 1200px;
            margin: auto;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
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

        .search-box input {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            width: 100%;
            font-size: 1rem;
            transition: 0.3s;
        }

        .search-box input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .table thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .table thead th {
            padding: 15px;
            border: none;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .table td {
            padding: 15px;
            vertical-align: middle;
        }

        /* Botão Voltar */
        .btn-voltar {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            font-weight: 500;
            border-radius: 10px;
            transition: 0.3s;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        }

        .btn-voltar:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
            color: #fff;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        <h5><i class="fas fa-list"></i> Veículos Cadastrados</h5>
    </div>

    <div class="card-body">

        <!-- Caixa de busca -->
        <div class="search-box mb-3">
            <input type="text" id="busca" class="form-control" placeholder="🔍 Buscar por marca, modelo ou ano...">
        </div>

        <?php if(count($veiculos) > 0): ?>
            <div class="table-responsive">
                <table class="table" id="tabelaVeiculos">
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
                        <tr class="linha-veiculo" data-busca="<?= strtolower($veiculo['marca'] . ' ' . $veiculo['modelo'] . ' ' . $veiculo['ano']) ?>">
                            <td><?= htmlspecialchars($veiculo['marca']) ?></td>
                            <td><?= htmlspecialchars($veiculo['modelo']) ?></td>
                            <td><?= htmlspecialchars($veiculo['ano']) ?></td>
                            <td>R$ <?= number_format($veiculo['valor'], 2, ',', '.') ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        <?php else: ?>
            <p class="text-center mt-3">Nenhum veículo cadastrado ainda. Adicione um novo veículo para começar!</p>
        <?php endif; ?>

        <a href="index.php" class="btn-voltar">← Voltar à Página Inicial</a>

    </div>
</div>



</body>
</html>