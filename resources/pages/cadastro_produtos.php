<?php
verificarAutenticacao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>

    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Cadastro de Produtos</h1>

    <button onclick="window.history.back();" class="btn btn-secondary mb-3">Voltar</button>

    <div id="mensagem" class="alert alert-info d-none"></div>

    <form id="formProduto" method="POST" action="../../app/cadastrar_produto.php" class="mt-4">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Produto:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço:</label>
            <input type="text" name="preco" id="preco" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="fornecedor_id" class="form-label">Fornecedor:</label>
            <select name="fornecedor_id" id="fornecedor_id" class="form-select" required></select>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('../../app/carregar_fornecedores.php')
            .then(response => response.json())
            .then(data => {
                let select = document.getElementById('fornecedor_id');
                data.forEach(fornecedor => {
                    let option = document.createElement('option');
                    option.value = fornecedor.id;
                    option.text = fornecedor.nome;
                    select.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Erro ao carregar fornecedores:', error);
            });

        document.getElementById('formProduto').addEventListener('submit', function(event) {
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
                    mensagem.innerHTML = 'Produto cadastrado com sucesso!';
                    document.getElementById('formProduto').reset();
                })
                .catch(error => {
                    const mensagem = document.getElementById('mensagem');
                    mensagem.classList.remove('d-none', 'alert-success');
                    mensagem.classList.add('alert-danger');
                    mensagem.innerHTML = 'Erro ao cadastrar produto.';
                });
        });
    });
</script>

<script src="/resources/js/bootstrap.bundle.min.js"></script>
</body>
</html>