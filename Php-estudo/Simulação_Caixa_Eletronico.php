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

    switch ($opcao) {

        case 1:
            echo "💰 Saldo atual: R$ " . number_format($_SESSION['saldo'], 2,',','.') . "\n";
            break;

        case 2:
            echo '
            <form method="post">
                <input type= "hidden" name = "opcao" value="depositar">
                <input type= "number" step="0.01" name="valor" placeholder="Valor do depósito">';
            echo '<button type="submit">Depositar</button>';
            echo '</form>';
                break;
            case 3:
            echo'<form method="post">
                <input type= "hidden" name = "opcao" value="sacar">
                <input type= "number" step="0.01" name="valor" placeholder="Valor do saque">;
             <button type="submit">Sacar</button>;
             </form>';
             break;

             case"depositar":
             $valor = $_POST['valor'];

             if($valor <= 0){
                echo "❌ Valor inválido para depósito\n";
             } elseif($valor > $_SESSION['saldo']){
                echo "🚫 Saldo insuficiente para depósito\n";
             } 
             else {
                $_SESSION['saldo'] += $valor;
                echo "✅ Depósito de R$ " . number_format($valor, 2,',','.') . " realizado com sucesso!\n";
             }
                break;
} ?>
    
</body>
</html>