<div class="titulo">Desafio Palíndromo</div>

<?php
function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não!';
        }
    }
    return 'Sim!';
}

echo palindromo('arara') . ' ';
echo palindromo('bola') . ' ';
echo palindromo('ana') . '<br>';

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim': 'Não';
}

echo palindromoSimples('arara') . ' ';
echo palindromoSimples('bola') . ' ';
echo palindromoSimples('ana') . '<br>';