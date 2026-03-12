<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>
<body>

<form method="post">
    Digite um número:
    <input type="number" name="numero">
    <button type="submit">Verificar</button>
</form>

<?php

function checkNumber($number){
    if ($number % 2 == 0){
        return "Par";
    } else {
        return "Ímpar";
    }
}

if(isset($_POST['numero'])){
    $numero = $_POST['numero'];
    echo "O número $numero é: " . checkNumber($numero);
}

?>

</body>
</html>

