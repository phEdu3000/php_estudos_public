<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Notas</title>
</head>
<body>
    <?php

        $aluno01 = 7.5;
        $aluno02 = 5.0;
        $aluno03 = 9.0;

        if($aluno01 >= 6.0){
            echo "Aluno 01 aprovado!" . "<br>";
        }else{
            echo "Aluno reprovado!" . "<br>";
        }

        if($aluno02 >= 6.0){
            echo "Aluno 02 aprovado!" . "<br>";
        }else{
            echo "Aluno reprovado!" . "<br>";
        }

        if($aluno03 >= 6.0){
            echo "Aluno 03 aprovado!" . "<br>";
        }else{
            echo "Aluno reprovado!" . "<br>";
        }

    ?>
    
</body>
</html>