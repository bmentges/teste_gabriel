<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estática = {$this->static}<br>";
        // Tentativa 2
        // echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA() {
        // echo "Não estática = {$this->naoStatic}<br>";
        // echo 'Estática = {$static}<br>';
        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); // Não é a forma ideal

echo '<br>';
echo A::$static, '<br>'; // Acessar diretamente pela classe
A::mostrarStaticA(); // Acessar diretamente pela classe

A::$static = 'Aterado membro de classe!';
echo A::$static, '<br>'; // Acessar diretamente pela classe