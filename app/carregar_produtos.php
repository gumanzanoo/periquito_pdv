<?php
require_once 'controller/ProdutoController.php';

$produtoController = new ProdutoController();
$produtos = $produtoController->listarProdutos();
echo json_encode($produtos);