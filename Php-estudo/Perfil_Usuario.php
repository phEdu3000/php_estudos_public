<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuario</title>
</head>
<body>
    <?php
        $perfil_usuario =[
            "nome" => "Eduardo",
            "idade"=> 18,
            "cidade"=> "Bsb"
        ];

        echo "Nome:" .$perfil_usuario ["nome"] . "<br>";
        echo "Idade:" .$perfil_usuario ["idade"] . "<br>";
        echo "Cidade:" .$perfil_usuario ["cidade"] . "<br>";
    ?>
    
</body>
</html>