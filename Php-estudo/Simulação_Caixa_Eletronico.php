<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <h2>Caixa Eletrônico</h2>

    <form method="post">
        <label>Escolha uma opção</label><br><br>

            <button name= "opcao" value="1">Ver saldo</button><br><br>
            <button name="opcao" value="2">Depositar</button><br><br>
            <button name="opcao" value="3">Sacar</button><br><br>
            <button name="opcao" value="4">Sair</button><br><br>
    </form>

    <br>

    <?php
    session_start();

    if(!isset($_SESSION['saldo'])){
        $_SESSION['saldo'] = 0;
    }

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $opcao = $_POST['opcao'];
        
    }


echo "🏧 Caixa Eletrônico\n";

while ($opcao != 4) {

    echo "\n=== MENU ===\n";
    echo "1 - Ver saldo\n";
    echo "2 - Depositar\n";
    echo "3 - Sacar\n";
    echo "4 - Sair\n";

    $opcao = (int) readline("Escolha uma opção: ");

    switch ($opcao) {

        case 1:
            echo "💰 Saldo atual: R$ " . number_format($saldo, 2) . "\n";
            break;

        case 2:
            $valor = (float) readline("Digite o valor do depósito: ");
            
            if ($valor > 0) {
                $saldo += $valor;
                echo "✅ Depósito realizado!\n";
            } else {
                echo "❌ Valor inválido\n";
            }
            break;

        case 3:
            $valor = (float) readline("Digite o valor do saque: ");

            if ($valor <= 0) {
                echo "❌ Valor inválido\n";

            } elseif ($valor > $saldo) {
                echo "🚫 Saldo insuficiente!\n";

            } else {
                $saldo -= $valor;
                echo "💸 Saque realizado!\n";
            }
            break;

        case 4:
            echo "👋 Encerrando...\n";
            break;

        default:
            echo "❌ Opção inválida\n";
    }
} ?>
    
</body>
</html>