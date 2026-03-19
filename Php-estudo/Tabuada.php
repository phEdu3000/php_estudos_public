<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada</h1>
    <form method="post">
        Digite um numero:<input type="number" name="num">
    </form>
    <p>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];  
    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}

    
    ?>
    

    </p>
    
</body>
</html>