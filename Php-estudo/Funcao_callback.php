<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function aplicarCallback($array, $callback) {
    $resultado = [];

    foreach ($array as $item) {
        $resultado[] = $callback($item);
    }

    return $resultado;
}

$resultado = aplicarCallback([1, 2, 3], function($n) {
    return $n * 2;
});

print_r($resultado);
?>
</body>
</html>