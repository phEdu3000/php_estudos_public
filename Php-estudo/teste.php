<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// teste.php

// 1. Inclui o arquivo de conexão que você criou
require_once 'conexao.php';

echo "<h2>Testando Conexão com o Banco de Dados...</h2>";

try {
    // 2. Verifica se a variável $pdo foi criada corretamente dentro do conexao.php
    if (isset($pdo) && $pdo instanceof PDO) {
        echo "<p style='color: green;'>✔ Sucesso: O arquivo conexao.php foi incluído e o PDO está pronto!</p>";
    } else {
        echo "<p style='color: red;'>❌ Erro: A variável \$pdo não foi encontrada.</p>";
    }
} catch (PDOException $e) {
    echo "<p style='color: red;'>❌ Erro na execução: " . $e->getMessage() . "</p>";
}
    ?>
</body>
</html>