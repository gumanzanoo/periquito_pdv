<?php
require_once 'controller/PedidoController.php';

$produtoId = $_POST['produtoId'];

$produtoController = new PedidoController();
$produtoController->removerDoCarrinho($produtoId);

echo json_encode(['status' => 'success', 'mensagem' => 'Produto removido com sucesso!']);
exit();