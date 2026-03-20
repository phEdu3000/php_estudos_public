<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo</title>
</head>
<body>
    <h1>Jogo de Adivinhação</h1>
    <?php

$numero = rand(1, 100);
$tentativas = 0;

echo "🎮 Jogo de Adivinhação!\n";
echo "Tente adivinhar o número entre 1 e 100\n";

$acertou = false;

while (!$acertou) {

    $chute = (int) readline("Digite seu palpite: ");
    $tentativas++;

    if ($chute == $numero) {
        echo "🎉 Acertou! O número era $numero\n";
        echo "Você acertou em $tentativas tentativas!\n";
        $acertou = true;

    } elseif ($chute < $numero) {
        echo "🔼 Tente um número MAIOR\n";

    } else {
        echo "🔽 Tente um número MENOR\n";
    }
} 
?>
</body>
</html>