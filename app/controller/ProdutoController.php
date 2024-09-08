<?php
require_once __DIR__ . '/../model/Produto.php';

class ProdutoController {

    public function __construct()
    {
        verificarAutenticacao();
    }

    public function listarProdutos(): false|array
    {
        return Produto::listarTodos();
    }

    public function buscarProdutoPorId($produtoId)
    {
        return Produto::buscarPorId($produtoId);
    }

    public function cadastrarProduto($nome, $preco, $fornecedor_id): string
    {
        Produto::cadastrar($nome, $preco, $fornecedor_id);
        return "Produto cadastrado com sucesso!";
    }
}