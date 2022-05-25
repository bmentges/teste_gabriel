<div class="titulo">Classe Abstrata</div>

<?php
abstract class Abstrata {
    public abstract function metodo1();
    protected abstract function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1() {
        echo "Executando o Método 1<br>";
    }

    public abstract function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1() {
        echo "Executando o Método 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2($parametro) {
        echo "Executando o Método 2, com parâmetro $parametro<br>";
    }

    public function metodo3() {
        echo "Executando o Método 3<br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
// $c->metodo2('externo'); <- Não consigo chamar aqui porque é protegido, mas posso mudar de protected para public e chamar por aqui.
$c->metodo3();

echo "<br>";
var_dump($c);

echo "<br>";
var_dump($c instanceof Concreta);
var_dump($c instanceof FilhaAbstrata);
var_dump($c instanceof Abstrata);

echo "<br>";
echo "Fim!";