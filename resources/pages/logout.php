<?php
require_once '../../app/controller/UsuarioController.php';
verificarAutenticacao();

$usuarioController = new UsuarioController();
$usuarioController->logout();