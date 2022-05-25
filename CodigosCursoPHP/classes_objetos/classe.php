<div class="titulo">Primeira Classe</div>

<?php
    // Classe
class Cliente {
    // Atributos
    public $nome = 'Anônimo';
    public $idade = 18;
    // Método
    public function apresentar() {
        return "Nome: {$this->nome} - Idade: {$this->idade}";
    }
}

// Criamos uma instância e damos os dados
$c1 = new Cliente();
echo $c1->nome, '<br>';
$c1->nome = 'Ana Silva';
echo $c1->nome, '<br>';
$c1->idade = 27;

$c2 = new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 43;

echo $c1->apresentar(), '<br>';
echo $c2->apresentar(), '<br>';