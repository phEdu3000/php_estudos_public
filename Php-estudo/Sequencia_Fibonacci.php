<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    <h1>Sequência de Fibonacci</h1>
    <?php
    $n = (int) readline("Digite o número de termos: ");
    $a = 0;
    $b = 1;

    echo "Os primeiros $n termos da sequência de Fibonacci são:\n";

    for ($i = 0; $i < $n; $i++) {
        echo "$a ";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
    ?>
</body>
</html>