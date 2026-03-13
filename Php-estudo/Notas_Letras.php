<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas Convertidas</title>
</head>
<body>
    <h2>Notas convertidas</h2>


    <form method= "post">
        <input type=number name="nota" required>
        <br><br>
        <button type="submit">converter</button>
    </form>
    <?php 
    if(isset($_POST['nota'])){
        $nota = $_POST['nota'];
    
    switch (true){
        case ($nota >= 0 && $nota <= 4):
            echo "Nota: F";
            break;
        case ($nota == 5):
            echo "Nota: E";
            break;
        case ($nota == 6):
            echo "Nota: D";
            break;
        case ($nota == 7):
            echo "Nota: C";
            break;
        case ($nota == 8):
            echo "Nota: B";
            break;
        case ($nota == 9):
            echo "Nota: A";
            break;
        case($nota ==10):
            echo "Nota: S";
            break;
            default:
            echo "nota invalida";
            
    }
    }
    ?>
</body>
</html>