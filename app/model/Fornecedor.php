<?php
require_once __DIR__ . '/../infrastructure/dbconn.php';

class Fornecedor {
    public static function listarTodos(): false|array
    {
        global $pdo;
        $sql = "SELECT * FROM fornecedores";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll();
    }

    public static function cadastrar($nome, $contato): void
    {
        global $pdo;
        $sql = "INSERT INTO fornecedores (nome, contato) VALUES (:nome, :contato)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nome' => $nome, 'contato' => $contato]);
    }
}