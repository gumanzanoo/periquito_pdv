<?php
require_once 'controller/FornecedorController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fornecedorController = new FornecedorController();
    $fornecedorController->cadastrarFornecedor($_POST['nome'], $_POST['contato']);
}