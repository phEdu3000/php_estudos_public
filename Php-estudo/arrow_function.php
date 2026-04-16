<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$numeros = [1, 2, 3, 4, 5, 6];

$pares = array_filter($numeros, fn($n) => $n % 2 == 0);

print_r($pares);
?>
</body>
</html>