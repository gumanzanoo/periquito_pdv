<?php
require_once 'controller/ProdutoController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produtoController = new ProdutoController();
    $produtoController->cadastrarProduto($_POST['nome'], $_POST['preco'], $_POST['fornecedor_id']);
}