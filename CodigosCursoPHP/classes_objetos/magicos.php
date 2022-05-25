<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "E morreu!";
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos de idade.";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params) {
        echo "Tentando executar o método '${metodo}'";
        echo ", com os parâmetros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40); // chamando o __construct
$pessoa->apresentar(); // chamando o __toString
echo $pessoa, '<br>'; // chamando o __toString
$pessoa->nome = 'Reinaldo';

// chama o método diretamente sem o __call
$pessoa->apresentar(); 

$pessoa->nomeCompleto = 'Muito legal!!!'; // chamando o __set
$pessoa->nomeCompleto; // chamando o __get

// acessa o atributo diretamente sem __get
echo $pessoa->nome;

// chamando o __call porque o método não existe no objeto
$pessoa->exec(1, 'teste', true, [1, 2, 3]);

// chamando o __destruct
$pessoa = null;