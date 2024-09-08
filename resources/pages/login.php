<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Login</h1>

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

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <div class="text-center mt-3">
        <p>Não tem uma conta? <a href="/resources/pages/cadastro_usuario.php">Cadastre-se</a></p>
    </div>
</div>

<script src="/resources/js/bootstrap.bundle.min.js"></script>
</body>
</html>