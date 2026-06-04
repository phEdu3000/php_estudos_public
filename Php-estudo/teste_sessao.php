<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// teste_sessao.php
require_once 'sessao.php';

// Criamos uma sessão de teste fake só para o print funcionar sem banco!
$_SESSION['usuario_id'] = 99;
$_SESSION['usuario_nome'] = "Usuário de Teste";

echo "<div style='padding: 20px; font-family: sans-serif;'>";
echo "<h2 style='color: #2c3e50;'>Módulo 2: Teste de Sessão</h2>";

if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['usuario_id'])) {
    echo "<p style='color: green; font-size: 18px;'>✔ <strong>Sucesso:</strong> O arquivo sessao.php foi incluído e a sessão está ativa no servidor!</p>";
    echo "<p><strong>ID do Usuário Logado:</strong> " . $_SESSION['usuario_id'] . "</p>";
} else {
    echo "<p style='color: red;'>❌ Erro: A sessão não foi iniciada.</p>";
}
echo "</div>";
    ?>
</body>
</html>