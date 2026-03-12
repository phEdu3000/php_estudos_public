<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>
<h2>Calculadora Simples</h2>
<form method="post">

<input type="number" name="num1" required>
<br><br>
<input type="number" name="num2" required>
<br><br>
<select name="operacao">
    <option value="soma">+</option>
    <option value=subtracao>-</option>
    <option value=multiplicacao>*</option>
    <option value=divisao>/</option>
</select>
<br><br>

<button type= "submit">calcular</button>
</form>
    
<?php
if(isset($_POST['num1'])&& isset($_POST['num2'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    
    if($operacao == "soma"){
        $resultado = $num1 + $num2;
        }
        elseif($operacao == "subtracao"){
            $resultado = $num1 - $num2;
        }
        elseif($operacao == "multiplicacao"){
            $resultado = $num1 * $num2;
        }
        elseif($operacao == "divisao"){
            if($num2 >= 1){
                $resultado = $num1 / $num2;
            }else{
                echo "não é possivel dividir por zero ou negativo";
           return;
        }
        $resultado = $num1 / $num2;
    }

    echo "Resultado: " . $resultado;
}

?>
</body>
</html>