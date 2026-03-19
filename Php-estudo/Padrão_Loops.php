<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PADRÃO DE ASTERISCOS</title>
</head>
<body>
    <h1>PADRÃO DE ASTERISCOS</h1>
    <?php
    $i=6;    
    for($j=1;$j<$i;$j++){
        for($k=1;$k<=$j;$k++){
            echo "*";
        }
        echo"<br>";
    }
?>


</body>
</html>