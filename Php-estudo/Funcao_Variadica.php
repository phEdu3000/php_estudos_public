<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function soma(...$numeros) {
    return array_sum($numeros);
}

echo soma(1, 2, 3, 4);
?>
</body>
</html>