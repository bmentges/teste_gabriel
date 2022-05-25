<div class="titulo">Classe Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data;
$aniversario->dia = 11;
$aniversario->mes = 05;
$aniversario->ano = 2022;

$casamento = new Data();
$casamento->dia = 16;
$casamento->mes = 12;
$casamento->ano = 2010;

echo $aniversario->apresentar(), '<br>';
echo $casamento->apresentar();