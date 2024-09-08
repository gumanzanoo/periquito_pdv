<?php
require_once 'controller/FornecedorController.php';

$fornecedorController = new FornecedorController();
$fornecedores = $fornecedorController->listarFornecedores();
echo json_encode($fornecedores);