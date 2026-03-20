<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Fatorial</title>
</head>
<body>
    <h1>Calculo de Fatorial</h1>
    <?php

$n = (int) readline("Digite um número: ");

if ($n < 0) {
    echo "Fatorial não existe para número negativo\n";
} else {
    $fatorial = 1;

    while ($n > 1) {
        $fatorial *= $n;
        $n--;
    }

    echo "O fatorial é: $fatorial\n";
} ?>
</body>
</html>