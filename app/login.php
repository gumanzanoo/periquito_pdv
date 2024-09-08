<?php
require_once 'controller/UsuarioController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuarioController = new UsuarioController();
    if ($usuarioController->autenticarUsuario($email, $senha)) {
        header('Location: ../public/index.php');
        exit();
    } else {
        echo "Usuário ou senha inválidos.";
    }
}