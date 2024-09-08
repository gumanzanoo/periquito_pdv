<?php
require_once __DIR__ . '/../model/Fornecedor.php';

class FornecedorController {
    public function listarFornecedores(): false|array
    {
        return Fornecedor::listarTodos();
    }

    public function cadastrarFornecedor($nome, $contato): string
    {
        Fornecedor::cadastrar($nome, $contato);
        return "Fornecedor cadastrado com sucesso!";
    }
}