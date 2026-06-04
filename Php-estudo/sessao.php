<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// sessao.php

// 1. Inicia a sessão no servidor se ela ainda não estiver ativa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Função utilitária para proteger páginas restritas.
 * Se o usuário não tiver uma sessão válida (não estiver logado),
 * ele é expulso imediatamente para a página de login.
 */
function verificarAcesso() {
    if (!isset($_SESSION['usuario_id'])) {
        header("Location: login.php");
        exit();
    }
}
    ?>
</body>
</html>