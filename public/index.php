<?php
verificarAutenticacao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periquito PDV</title>

    <link href="/resources/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .navbar .me-3 {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produtos</h5>
                    <p class="card-text">Gerencie seus produtos cadastrando e editando as informações.</p>
                    <a href="/resources/pages/cadastro_produtos.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Fornecedores</h5>
                    <p class="card-text">Cadastre e edite seus fornecedores de forma simples.</p>
                    <a href="/resources/pages/cadastro_fornecedor.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Ver Produtos</h5>
                    <p class="card-text">Visualize todos os produtos disponíveis e gerencie-os.</p>
                    <a href="/resources/pages/ver_produtos.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4 offset-md-4">
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

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2024 Periquito PDV</p>
</footer>

<script src="/resources/js/bootstrap.bundle.min.js"></script>
</body>
</html>