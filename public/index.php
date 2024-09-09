<?php
verificarAutenticacao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periquito PDV</title>

    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="/resources/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #212121;
            font-family: 'JetBrains Mono', monospace;
            color: white;
            position: relative;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
        }

        .navbar, footer {
            background-color: #424242;
            color: white;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .navbar .me-3 {
            margin-right: 10px;
        }

        .card {
            min-height: 250px;
            background-color: #424242;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .card .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .btn-primary {
            align-self: center;
        }

        /* Periquito como plano de fundo */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('/resources/periquito_img.svg');
            background-size: 400px;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.1; /* Transparência do periquito */
            z-index: -1;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Periquito PDV</a>
        <div class="collapse navbar-collapse justify-content-end">
            <span class="navbar-text text-white me-3">
                Bem-vindo, <?php echo $_SESSION['nome']; ?>
            </span>
            <a href="/resources/pages/logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Bem-vindo ao Periquito PDV</h1>
            <p class="lead">Utilize o menu abaixo para navegar entre as funcionalidades do sistema.</p>
        </div>
    </div>

    <div class="row mt-4 justify-content-center">
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produtos</h5>
                    <p class="card-text">Gerencie seus produtos cadastrando e editando as informações.</p>
                    <a href="/resources/pages/cadastro_produtos.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Fornecedores</h5>
                    <p class="card-text">Cadastre e edite seus fornecedores de forma simples.</p>
                    <a href="/resources/pages/cadastro_fornecedor.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Ver Produtos</h5>
                    <p class="card-text">Visualize todos os produtos disponíveis e gerencie-os.</p>
                    <a href="/resources/pages/ver_produtos.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Carrinho de Compras</h5>
                    <p class="card-text">Veja os produtos adicionados ao carrinho e finalize sua compra.</p>
                    <a href="/resources/pages/carrinho.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 Periquito PDV</p>
</footer>

<script src="/resources/js/bootstrap.bundle.min.js"></script>
</body>
</html>
