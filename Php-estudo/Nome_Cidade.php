<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome de Cidades</title>
</head>
<body>
    <?php
    $cidade = ["São Paulo", "Rio de Janeiro", "Belo Horizonte", "Salvador", "Fortaleza"];
        foreach($cidade as $cidade){
            echo "$cidade" . "<br>";
        }
        ?>
</body>
</html>