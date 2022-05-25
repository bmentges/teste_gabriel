<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar();
}

interface Mamífero {
    function mamar();
}

interface Canino extends Animal, Mamífero {
    function latir(): string;
}

interface Felino {
    function correr();
}

class Cachorro implements Canino {
    function respirar() {
        return "Irei respirar!";
    }

    function latir(): string {
        return "Irei latir!";
    }

    function mamar(): string {
        return "Irei mamar!";
    }
    
    function correr() {
        return "Agora irei correr!";
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->correr(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamífero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Felino);