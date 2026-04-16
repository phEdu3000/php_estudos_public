<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * fatorial($n - 1);
}

echo fatorial(5);
?>
</body>
</html>