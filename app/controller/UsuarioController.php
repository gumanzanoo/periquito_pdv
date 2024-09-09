<?php

use JetBrains\PhpStorm\NoReturn;

require_once __DIR__ . '/../model/Usuario.php';

class UsuarioController {
    public function cadastrarUsuario($nome, $email, $senha): string
    {
        Usuario::cadastrar($nome, $email, $senha);
        return "Usuário cadastrado com sucesso!";
    }

    public function autenticarUsuario($email, $senha): bool
    {
        $usuario = Usuario::autenticar($email, $senha);
        if ($usuario) {
            session_start();
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            return true;
        }
        return false;
    }

    #[NoReturn] public function logout(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        session_unset();
        session_destroy();

        header('Location: /resources/pages/login.php');
        exit();
    }
}