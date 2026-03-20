<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Primos</title>
</head>
<body>
    <h1>Numeros Primos</h1>
        <?php
        
        for($i=1;$i<=50;$i++){
            $primo = true;
            for($j=2;$j<$i;$j++){
                if($i % $j == 0){
                    $primo = false;
    
                    }
          
            }
        if($primo && $i > 1){
    echo "$i é primo<br>";
}

        }
        ?>
</body>
</html>