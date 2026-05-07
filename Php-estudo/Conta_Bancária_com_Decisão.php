<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2 - Conta Bancária</title>
</head>
<body>

<?php

class ContaBancaria {

    public $titular;
    public $saldo;

    public function depositar($valor) {
        $this->saldo += $valor;
        echo "Depósito de R$ $valor realizado.<br>";
    }

    public function sacar($valor) {

        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ $valor realizado.<br>";
        } else {
            echo "Saldo insuficiente.<br>";
        }

    }

    public function mostrarSaldo() {
        echo "<br>Saldo atual: R$ " . $this->saldo;
    }
}

// Criando objeto
$conta = new ContaBancaria();

// Definindo valores
$conta->titular = "Raphael";
$conta->saldo = 0;

// Depositando dinheiro
$conta->depositar(500);

// Tentando sacar
$conta->sacar(200);
$conta->sacar(400);

// Mostrando saldo final
$conta->mostrarSaldo();

?>

</body>
</html>