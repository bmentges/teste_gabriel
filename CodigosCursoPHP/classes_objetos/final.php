<div class="titulo">Modificador Final</div>

<?php
abstract class Abstrata {
    public abstract function metodo1();

    public final function metodo2() {
        echo 'Não vou mudar!<br>';
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo 'Executando o Método 1<br>';
    }

    //  public function metodo2() {
    //      echo 'Extendendo o Método 2<br>';
    //  }
}

$class = new Classe();
$class->metodo1();
$class->metodo2();

final class Unica {
    public $attr = 'Valor Único!!!';
}

$unica = new Unica();
echo $unica->attr;