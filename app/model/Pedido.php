<?php
require_once __DIR__ . '/../infrastructure/dbconn.php';

class Pedido
{
    public function criarPedido($usuarioId, $carrinho): array
    {
        global $pdo;

        try {
            $pdo->beginTransaction();

            $total = 0;
            foreach ($carrinho as $item) {
                $total += $item['produto']['preco'] * $item['quantidade'];
            }

            $stmt = $pdo->prepare("INSERT INTO pedidos (usuario_id, total) VALUES (:usuario_id, :total)");
            $stmt->execute(['usuario_id' => $usuarioId, 'total' => $total]);
            $pedidoId = $pdo->lastInsertId();

            foreach ($carrinho as $item) {
                $stmt = $pdo->prepare("INSERT INTO pedido_itens (pedido_id, produto_id, quantidade, preco) VALUES (:pedido_id, :produto_id, :quantidade, :preco)");
                $stmt->execute([
                    'pedido_id' => $pedidoId,
                    'produto_id' => $item['produto']['id'],
                    'quantidade' => $item['quantidade'],
                    'preco' => $item['produto']['preco']
                ]);
            }

            $pdo->commit();
            return ['sucesso' => true, 'mensagem' => 'Compra finalizada com sucesso!'];
        } catch (Exception $e) {
            $pdo->rollBack();
            return ['sucesso' => false, 'mensagem' => 'Erro ao finalizar a compra: ' . $e->getMessage()];
        }
    }
}
