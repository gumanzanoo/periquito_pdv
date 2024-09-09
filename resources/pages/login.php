<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">

    <style>
        body, input, label, button, p {
            font-family: 'JetBrains Mono', monospace;
        }

        .container {
            max-width: 400px;
        }

        .periquito-title {
            font-size: 24px;
            font-weight: bold;
            color: #004d40;
        }

        input {
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="text-center">
        <img src="/resources/periquito_img.svg" alt="Periquito" class="img-fluid" style="max-width: 150px;">
        <p class="periquito-title">Periquito PDV</p>
    </div>

    <?php if (isset($_GET['cadastro']) && $_GET['cadastro'] == 'sucesso'): ?>
        <div class="alert alert-success text-center">
            Cadastro realizado com sucesso! Faça login.
        </div>
    <?php endif; ?>

    <form id="loginForm" method="POST" action="../../app/login.php" class="mt-4">
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>

    <div class="text-center mt-3">
        <p>Não tem uma conta? <a href="/resources/pages/cadastro_usuario.php">Cadastre-se</a></p>
    </div>
</div>

<script src="/resources/js/bootstrap.bundle.min.js"></script>
</body>
</html>
