<?php
require_once 'controller/UsuarioController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuarioController = new UsuarioController();
    $usuarioController->cadastrarUsuario($nome, $email, $senha);

    header('Location: /resources/pages/login.php?cadastro=sucesso');
    exit();
}
