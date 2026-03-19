<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Random</title>
</head>
<body>
    <h1>Simulador de Dados</h1>
    <p>
        <?php
        //um dado é jogado até parar em 6.
        //Quando chega em 6 o programa termina 
        //informa quantas vezes o dado foi jogado 
    $cont= 0;
        
    do{
         $dado = rand(1,6);
         echo"O dado deu:$dado<br>";
         if($dado !== 6){
         echo "O dado não caiu em 6<br>";
         
         } else{ 
            echo "Parabéns o dado parou em 6!!!!";
         }
         $cont++;
    }while($dado !==6);

        echo "<br>O dado foi jogado: $cont vezes";

        ?>

    </p>
</body>
</html>