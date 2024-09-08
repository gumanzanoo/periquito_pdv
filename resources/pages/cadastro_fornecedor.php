<?php
verificarAutenticacao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedores</title>

    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Cadastro de Fornecedores</h1>

    <button onclick="window.history.back();" class="btn btn-secondary mb-3">Voltar</button>

    <div id="mensagem" class="alert alert-info d-none"></div>

    <form id="formFornecedor" method="POST" action="../../app/cadastrar_fornecedor.php" class="mt-4">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="contato" class="form-label">Contato:</label>
            <input type="text" name="contato" id="contato" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<script>
    document.getElementById('formFornecedor').addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(this);

        fetch(this.action, {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                const mensagem = document.getElementById('mensagem');
                mensagem.classList.remove('d-none', 'alert-danger');
                mensagem.classList.add('alert-success');
                mensagem.innerHTML = 'Fornecedor cadastrado com sucesso!';
                document.getElementById('formFornecedor').reset();
            })
            .catch(error => {
                const mensagem = document.getElementById('mensagem');
                mensagem.classList.remove('d-none', 'alert-success');
                mensagem.classList.add('alert-danger');
                mensagem.innerHTML = 'Erro ao cadastrar fornecedor.';
            });
    });
</script>

<script src="/resources/js/bootstrap.bundle.min.js"></script>
</body>
</html>