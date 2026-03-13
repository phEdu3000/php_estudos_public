<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Opções</title>
</head>
<body>
    <h2>Menu de Opções</h2>
    <a href ="Login_Simples.php">Login Simples</a>
    <br><br>
    <a href ="php_par_ou_impar.php">Par ou Ímpar</a>
    <br><br>
    <a href ="Maior_Numero.php">Maior Número de Três</a>
    <br><br>
    <a href ="Calculadora_Simples.php">Calculadora Simples</a>
    <br><br>
    <hr>
    <?php
    if(isset($_GET['option'])){
        $option = $_GET['option'];

        switch($option){
            case 1 :
                 include 'Login_Simples.php';
                break;
            case 2 :
                 include 'php_par_ou_impar.php';
            break;

            case 3 :
                 include 'Maior_Numero.php'; 
            break;

            case 4 :
                 include 'Calculadora_Simples.php';
            break;

            default:
                 echo "Opção inválida.";
                    }
    }
    ?>
</body>
    
</html>