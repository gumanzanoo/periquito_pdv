<?php
require_once __DIR__ . '/../infrastructure/dbconn.php';

class Produto {
    public static function buscarPorId($id) {
        global $pdo;
        $sql = "SELECT * FROM produtos WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function listarTodos(): false|array
    {
        global $pdo;
        $sql = "SELECT * FROM produtos";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll();
    }

    public static function cadastrar($nome, $preco, $fornecedor_id): void
    {
        global $pdo;
        $sql = "INSERT INTO produtos (nome, preco, fornecedor_id) VALUES (:nome, :preco, :fornecedor_id)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nome' => $nome, 'preco' => $preco, 'fornecedor_id' => $fornecedor_id]);
    }
}