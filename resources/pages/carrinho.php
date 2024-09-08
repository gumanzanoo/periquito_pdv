<?php
require_once '../../app/controller/PedidoController.php';
verificarAutenticacao();

$pedidoController = new PedidoController();
$carrinho = $pedidoController->listarCarrinho();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>

    <link href="/resources/css/bootstrap.min.css" rel="stylesheet">
    <script src="/resources/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Carrinho de Compras</h1>

    <button onclick="window.history.back();" class="btn btn-secondary mb-3">Voltar</button>

    <div id="mensagem" class="alert alert-info d-none"></div>

    <?php if (count($carrinho) > 0): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Total</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody id="tabelaCarrinho">
            <?php foreach ($carrinho as $itemId => $item): ?>
                <tr>
                    <td><?php echo $item['produto']['id']; ?></td>
                    <td><?php echo $item['produto']['nome']; ?></td>
                    <td>R$ <?php echo number_format($item['produto']['preco'], 2, ',', '.'); ?></td>
                    <td><?php echo $item['quantidade']; ?></td>
                    <td>R$ <?php echo number_format($item['produto']['preco'] * $item['quantidade'], 2, ',', '.'); ?></td>
                    <td>
                        <button class="btn btn-danger" onclick="removerDoCarrinho(<?php echo $item['produto']['id']; ?>)">Remover</button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="text-center">Nenhum item no carrinho.</p>
    <?php endif; ?>
    <button class="btn btn-success" onclick="finalizarCompra()">Finalizar Compra</button>
</div>

<script>
    function removerDoCarrinho(produtoId) {
        const formData = new FormData();
        formData.append('produtoId', produtoId);

        fetch('../../app/remover_do_carrinho.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    const mensagemDiv = document.getElementById('mensagem');
                    mensagemDiv.classList.remove('d-none');
                    mensagemDiv.classList.add('alert-success');
                    mensagemDiv.innerHTML = data.mensagem;

                    window.location.reload();
                } else {
                    const mensagemDiv = document.getElementById('mensagem');
                    mensagemDiv.classList.remove('d-none');
                    mensagemDiv.classList.add('alert-danger');
                    mensagemDiv.innerHTML = 'Erro ao remover produto do carrinho.';
                }
            })
            .catch(error => {
                const mensagemDiv = document.getElementById('mensagem');
                mensagemDiv.classList.remove('d-none');
                mensagemDiv.classList.add('alert-danger');
                mensagemDiv.innerHTML = 'Erro ao remover produto do carrinho.';
            });
    }

    function finalizarCompra() {
        fetch('../../app/finalizar_compra.php', {
            method: 'POST'
        })
            .then(response => response.json())
            .then(data => {
                if (data.sucesso) {
                    alert('Compra realizada com sucesso!');
                    window.location.reload();
                } else {
                    alert('Erro ao finalizar a compra.');
                }
            })
            .catch(error => {
                alert('Erro ao finalizar a compra.');
            });
    }
</script>
</body>
</html>