<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código de Produto</title>
</head>
<body>
    <h2>Código de Produto</h2>
    <form method="post">
        Digite o código do seu produto de 1 a 5:
        <input type="number" name="codigo" min="1" max="5" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if(isset($_POST['codigo'])){
        $codigo = $_POST['codigo'];
        switch ($codigo){
            case 1:
                echo "Produto: Celular";
                break;
            case 2:
                echo "Produto: Notebook";
                break;
            case 3:
                echo"Produto: Tablet";
                break;
            case 4:
                echo "Produto: Fone de Ouvido";
                break;
            case 5: 
                echo "Produto: Smartwatch";
                break;
            default:
                echo "Codigo de produto invalido ";

        }
    }
    ?>
</body>
</html>