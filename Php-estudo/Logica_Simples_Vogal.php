<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogal ou Consoante</title>
</head>
<body>
    <h2>Vogal ou Consoante</h2>
    <form method="post">
        Qual letra deseja verificar?
        <input type = "text" name= "letra" maxlenght= "1"  pattern="[A-Za-z]" required>
        <button type ="submit">Verificar</button>
    </form>
    <?php
    if(isset($_POST['letra'])){
        $letra = strtolower($_POST['letra']);

        switch ($letra){
            case "a":
            case "e":
            case "i":
            case "o":
            case "u":
                echo "A letra '$letra' é uma vogal.";
                break;
            default:
                echo "A letra '$letra' é uma consoante.";

        }
    }
    ?>
</body>
</html>