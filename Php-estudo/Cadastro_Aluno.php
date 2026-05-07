<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3 - Cadastro de Aluno</title>
</head>
<body>

<?php

class Aluno {

    private $nome;
    private $nota;

    // Construtor
    public function __construct($nome) {
        $this->nome = $nome;
    }

    // Setter nome
    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Getter nome
    public function getNome() {
        return $this->nome;
    }

    // Setter nota
    public function setNota($nota) {
        $this->nota = $nota;
    }

    // Getter nota
    public function getNota() {
        return $this->nota;
    }

    // Verificar situação
    public function verificarSituacao() {

        if ($this->nota >= 6) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }

    }

}

// Criando aluno
$aluno = new Aluno("Raphael");

// Definindo nota
$aluno->setNota(8);

// Exibindo dados
echo "<h2>Cadastro do Aluno</h2>";

echo "Nome: " . $aluno->getNome() . "<br>";
echo "Nota: " . $aluno->getNota() . "<br>";
echo "Situação: " . $aluno->verificarSituacao();

?>

</body>
</html>