<?php 
    session_start();

    if(!isset($_SESSION['saldo'])){
        $_SESSION['SALDO'] = 0;
        }
    $mensagem = "";
    $opcao = isset($_POST['opcao']) ? $_POST['opcao'] : "";
    $mensagem = "";

    if($opcao=="depositar"){
        $valor = (float)$_POST['valor'];
        $_SESSION['saldo'] += $valor;
        $mensagem = "✅ Depósito de R$ " . number_format($valor, 2,',','.') . " realizado com sucesso!";
    }
if ($opcao == "sacar"){
    $valor = (float)$_POST['valor'];
    if($valor <= $_SESSION['saldo']){
        $_SESSION['saldo']-= $valor;
        $mensagem = "✅ Saque de R$ " . number_format($valor, 2,',','.') . " realizado com sucesso!";
    } else {
        $mensagem = "🚫 Saldo insuficiente para saque!";
}
}
if ($opcao == "4"){
    session_destroy();
    header("Location:" . $_SERVER['PHP_SELF']);
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <h2>🏦 Meu Banco PHP</h2>

    <form method="post">
        <label>Escolha uma opção</label><br><br>

            <button name= "opcao" value="1">Ver saldo</button><br><br>
            <button name="opcao" value="2">Depositar</button><br><br>
            <button name="opcao" value="3">Sacar</button><br><br>
            <button name="opcao" value="4">Sair</button><br><br>
    </form>

    <br>

    <?php
         if ($mensagem) echo"<strong>$mensagem</strong><br><br>";


        switch ($opcao) {

        case 1:
            echo "💰 Saldo atual: R$ " . number_format($_SESSION['saldo'], 2,',','.') . "\n";
            break;

        case 2:
            echo '
            <form method="post">
                <input type= "hidden" name = "opcao" value="depositar">
                <input type= "number" step="0.01" name="valor" placeholder="Valor do depósito">
                <button type="submit">Depositar</button>
             </form>';
            break;

            case 3:
            echo'<form method="post">
                <input type= "hidden" name = "opcao" value="sacar">
                <input type= "number" step="0.01" name="valor" placeholder="Valor do saque">;
                <button type="submit">Sacar</button>;
                </form>';
             break;
           
} 
?>
    
</body>
</html>