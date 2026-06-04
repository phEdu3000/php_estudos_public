<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// teste_pdo.php
require_once 'conexao.php';

echo "<div style='padding: 20px; font-family: sans-serif;'>";
echo "<h2 style='color: #2c3e50;'>Módulo 1: Teste do PDO</h2>";

if (isset($pdo) && $pdo instanceof PDO) {
    echo "<p style='color: green; font-size: 18px;'>✔ <strong>Sucesso:</strong> O PDO foi iniciado e a conexão com o banco de dados está ativa!</p>";
} else {
    echo "<p style='color: red;'>❌ Erro: Conexão não encontrada.</p>";
}
echo "</div>";
    ?>
</body>
</html>