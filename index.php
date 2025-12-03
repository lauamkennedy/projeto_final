<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏠 Página Inicial</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            text-align: center;
            color: white;
        }

        h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            margin-bottom: 50px;
        }

        .center-box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .card-menu {
            background: white;
            border-radius: 15px;
            padding: 30px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            transition: transform .2s, box-shadow .2s;
        }

        .card-menu:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
        }

        .card-menu i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #667eea;
        }

        a.btn-acesso {
            display: block;
            margin-top: 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: .2s;
        }

        a.btn-acesso:hover {
            box-shadow: 0 10px 20px rgba(102,126,234,0.4);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-car"></i> Gestão de Veículos</h1>

        <div class="center-box">
            <div class="card-menu">
                <i class="fas fa-list"></i>
                <h3>Listar Veículos</h3>
                <a href="veiculos-cadastrados.php" class="btn-acesso">Ver Lista</a>
            </div>
        </div>

    </div>
</body>
</html>
