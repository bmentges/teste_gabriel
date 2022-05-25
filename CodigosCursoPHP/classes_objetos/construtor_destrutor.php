<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo 'Contrutor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu!<br>';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

// $pessoa = new Pessoa(); // -> Problema <- Não posso chamar dessa forma, pois preciso passar um parâmetro, nesse caso.

$pessoaA = new Pessoa('Rebeca Maria', 40);
$pessoaB = new Pessoa('João Pedro');

$pessoaA->apresentar();
unset($pessoaA);

$pessoaB->apresentar();
$pessoaB = null;