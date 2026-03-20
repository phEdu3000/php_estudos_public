<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Senha</title>
</head>
<body>
    <h1>Validação de Senha</h1>
    <?php

$senhaCorreta = "php123";
$tentativas = 0;

while ($tentativas < 3) {
    $senha = readline("Digite a senha: ");

    if ($senha === $senhaCorreta) {
        echo "✅ Acesso liberado!\n";
        break;
    } else {
        echo "❌ Senha incorreta\n";
    }

    $tentativas++;
}

if ($tentativas == 3) {
    echo "🚫 Acesso bloqueado\n";
} ?>
    
</body>
</html>