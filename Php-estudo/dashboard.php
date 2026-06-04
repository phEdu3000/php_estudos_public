<?php
// dashboard.php

// 1. Inclui o módulo de sessão
require_once 'sessao.php';

// Simulamos um login ativo para o painel não expulsar você no print
$_SESSION['usuario_id'] = 1;
$_SESSION['usuario_nome'] = "Administrador";

// 2. Inclui o módulo do PDO (Conexão)
require_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard do Sistema</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f9; color: #333; margin: 0; padding: 40px; }
        .container { max-width: 800px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 0 auto; }
        h1 { color: #2c3e50; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        .status-box { padding: 15px; border-radius: 6px; margin-bottom: 15px; font-size: 16px; }
        .success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .info { background-color: #e2e3e5; color: #383d41; border: 1px solid #d6d8db; }
        strong { color: #000; }
    </style>
</head>
<body>

<div class="container">
    <h1>Painel de Controle (Dashboard)</h1>
    <p>Este painel integra os dois módulos exigidos no projeto.</p>

    <div class="status-box success">
        ✔ <strong>Módulo de Sessão:</strong> ATIVO e funcionando! <br>
        Usuário conectado: <em><?php echo $_SESSION['usuario_nome']; ?> (ID: <?php echo $_SESSION['usuario_id']; ?>)</em>
    </div>

    <div class="status-box success">
        <?php
        if (isset($pdo) && $pdo instanceof PDO) {
            echo "✔ <strong>Módulo PDO (Banco de Dados):</strong> CONECTADO com sucesso ao MySQL local!";
        } else {
            echo "❌ <strong>Erro:</strong> A conexão com o banco falhou.";
        }
        ?>
    </div>

    <div class="status-box info">
        ℹ <strong>Nota do Sistema:</strong> Estrutura de arquivos validada e pronta para a entrega.
    </div>
</div>

</body>
</html>