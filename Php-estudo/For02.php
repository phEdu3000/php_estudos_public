<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma acumulada</title>
</head>
<body>
    <h1>Exercicio 02-for</h1>
<p>
    <?php   
        $soma=0;
        for ($i=1;$i<=10;$i++){
            $soma =$soma + $i;
            echo"Valor da soma em cada etapa:<br>$soma<br>";
        }
        echo "Valor da soma final:<br>$soma<br>";





    ?>

</p>



</body>
</html>