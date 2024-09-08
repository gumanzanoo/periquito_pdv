<?php
require_once __DIR__ . '/../model/Pedido.php';
require_once __DIR__ . '/../model/Produto.php';

class PedidoController
{
    public function finalizarCompra(): array
    {
        if (empty($_SESSION['carrinho'])) {
            return ['sucesso' => false, 'mensagem' => 'Carrinho vazio.'];
        }

        $pedidoModel = new Pedido();
        $resultado = $pedidoModel->criarPedido($_SESSION['usuario_id'], $_SESSION['carrinho']);

        if ($resultado['sucesso']) {
            unset($_SESSION['carrinho']);
        }

        return $resultado;
    }

    public function adicionarAoCarrinho($produtoId, $quantidade = 1): void {
        session_start();

        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];
        }

        $produto = Produto::buscarPorId($produtoId);

        if ($produto) {
            if (isset($_SESSION['carrinho'][$produtoId])) {
                $_SESSION['carrinho'][$produtoId]['quantidade'] += $quantidade;
            } else {
                $_SESSION['carrinho'][$produtoId] = [
                    'produto' => $produto,
                    'quantidade' => $quantidade
                ];
            }
        }
    }

    public function removerDoCarrinho($produtoId): void
    {
        session_start();
        if (!isset($_SESSION['carrinho'])) {
            return;
        }

        if (isset($_SESSION['carrinho'][$produtoId])) {
            unset($_SESSION['carrinho'][$produtoId]);
        }

        if (empty($_SESSION['carrinho'])) {
            unset($_SESSION['carrinho']);
        }
    }

    public function listarCarrinho(): array
    {
        return $_SESSION['carrinho'] ?? [];
    }
}
