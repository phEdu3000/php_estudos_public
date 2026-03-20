<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Interativo</title>
</head>
<body>
    <h1> Menu Interativo</h1>
    <?php

$saldo = 0;
$opcao = 0;

while ($opcao != 3) {

    echo "\n=== MENU ===\n";
    echo "1 - Ver saldo\n";
    echo "2 - Depositar\n";
    echo "3 - Sair\n";

    $opcao = (int) readline("Escolha uma opção: ");

    switch ($opcao) {

        case 1:
            echo "💰 Seu saldo é: R$ $saldo\n";
            break;

        case 2:
            $valor = (float) readline("Digite o valor do depósito: ");
            $saldo += $valor;
            echo "✅ Depósito realizado!\n";
            break;

        case 3:
            echo "👋 Saindo...\n";
            break;

        default:
            echo "❌ Opção inválida\n";
    }
} ?>
    
</body>
</html>