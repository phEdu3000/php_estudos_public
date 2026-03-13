<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior Numero de Tres</title>
</head>
<body>
    <h2>Maior Número de Três</h2>
    <form method=post>
        <input type="number" name="num1" required>
        <br><br>
        <input type="number" name="num2" required>
        <br><br>
        <input type="number" name="num3" required>
        <br><br>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if  (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $maior = $num1;

        if($num2 > $maior){
            $maior = $num2;
        }
        if($num3 > $maior){
            $maior = $num3;
        }

        echo "O maior número é: " . $maior;
    } 
    ?>
</body>
</html>