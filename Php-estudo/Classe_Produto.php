<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1 - Produto</title>
</head>
<body>

<?php

class Produto {
    public $nome;
    public $preco;

    public function mostrarDados() {
        echo "<h2>Dados do Produto</h2>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: R$ " . $this->preco . "<br>";
    }
}

// Criando objeto
$produto = new Produto();

// Definindo valores
$produto->nome = "Teclado Gamer";
$produto->preco = 250;

// Mostrando dados
$produto->mostrarDados();

?>

</body>
</html>