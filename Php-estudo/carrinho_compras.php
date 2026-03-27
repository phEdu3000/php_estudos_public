<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>
</head>
<body>
    <?php
        $produtos = [
            ["nome" => "Produto 1", "preco" => 10.00, "quantidade" => 2],
            ["nome" => "Produto 2", "preco" => 15.00, "quantidade" => 1],
            ["nome" => "Produto 3", "preco" => 20.00, "quantidade" => 3]
        ];

        $total = 0;

        foreach ($produtos as $produto) {
            $subtotal = $produto["preco"] * $produto["quantidade"];
            $total += $subtotal;
            echo "<p>{$produto['nome']} - R$ {$produto['preco']} x {$produto['quantidade']} = R$ " . number_format($subtotal, 2) . "</p>";
        }

        echo "<h3>Total: R$ " . number_format($total, 2) . "</h3>";
    ?>
</body>
</html>