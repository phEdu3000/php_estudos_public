<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array de Numeros</title>
</head>
<body>
    <?php
        $numeros = [1,2,3,4,5];
        $soma = 0;

        foreach($numeros as $numeros){
            $soma += $numeros;
        }

        echo"Soma: $soma";
        


    
    ?>
    
</body>
</html>