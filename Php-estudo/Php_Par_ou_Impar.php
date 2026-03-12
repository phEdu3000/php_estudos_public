
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function checkNumber($num) {
    if ($num % 2 == 0) {
        return "Par (Even)";
    } else {
        return "Impar (Odd)";
    }
}

// Example usage
$number = 10;
echo "O número $number é: " . checkNumber($number);

?>
</body>
</html>
