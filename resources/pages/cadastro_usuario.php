<?php
verificarAutenticacao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>

    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Cadastro de Usuário</h1>

    <form id="cadastroForm" method="POST" action="../../app/cadastrar_usuario.php" class="mt-4">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button onclick="window.history.back();" class="btn btn-secondary mb-3">Voltar</button>
    </form>

    <div class="text-center mt-3">
        <p>Já tem uma conta? <a href="/resources/pages/login.php">Faça login</a></p>
    </div>
</div>

<script src="/resources/js/bootstrap.bundle.min.js"></script>
</body>
</html>