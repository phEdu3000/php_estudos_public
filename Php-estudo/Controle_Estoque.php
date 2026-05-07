<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5 - Controle de Estoque</title>
</head>
<body>

<?php

class Estoque {

    public $produto;
    public $quantidade;

    // Construtor
    public function __construct($produto, $quantidade) {
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    // Método para verificar estoque
    public function verificarEstoque() {

        echo "Produto: " . $this->produto . "<br>";
        echo "Quantidade: " . $this->quantidade . "<br>";

        if ($this->quantidade < 5) {
            echo "Estoque baixo <br><br>";
        } else {
            echo "Estoque normal <br><br>";
        }

    }

}

// Vetor com produtos
$produtos = [
    new Estoque("Arroz", 10),
    new Estoque("Feijão", 3),
    new Estoque("Macarrão", 7),
    new Estoque("Óleo", 2)
];

// Percorrendo vetor
echo "<h2>Controle de Estoque</h2>";

foreach ($produtos as $item) {
    $item->verificarEstoque();
}

?>

</body>
</html>