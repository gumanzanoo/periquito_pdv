<?php

function iniciarSessaoSeNaoExistir(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function verificarAutenticacao(): void
{
    iniciarSessaoSeNaoExistir();
    if (!isset($_SESSION['usuario_id'])) {
        header('Location: /resources/pages/login.php');
        exit();
    }
}