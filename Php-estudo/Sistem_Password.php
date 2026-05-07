<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4 - Sistema de Senhas</title>
</head>
<body>

<?php

class SenhaAtendimento {

    public $senhaInicial;
    public $senhaFinal;

    // Construtor
    public function __construct($inicio, $fim) {
        $this->senhaInicial = $inicio;
        $this->senhaFinal = $fim;
    }

    // Método para chamar senhas
    public function chamarSenhas() {

        for ($i = $this->senhaInicial; $i <= $this->senhaFinal; $i++) {
            echo "Senha $i <br>";
        }

    }

}

// Criando objeto
$senha = new SenhaAtendimento(1, 10);

// Chamando senhas
echo "<h2>Chamando Senhas</h2>";

$senha->chamarSenhas();

?>

</body>
</html>