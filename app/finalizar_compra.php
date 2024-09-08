<?php
session_start();
require_once 'controller/PedidoController.php';

$pedidoController = new PedidoController();
$resultado = $pedidoController->finalizarCompra();

if ($resultado) {
    unset($_SESSION['carrinho']);
    echo json_encode(['sucesso' => true]);
} else {
    echo json_encode(['sucesso' => false]);
}