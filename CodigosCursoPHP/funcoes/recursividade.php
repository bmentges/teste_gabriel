<div class="titulo">Recursividade</div>

<?php
function somaUmAte5($numero) {
    $soma = 0;
    for($i = 0; $numero >= 1; $numero--) {
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte5(5) . '<br>';

// Outro exemplo

function somaUmAte10($numero) {
    $soma = 0;
    for($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte10(10) . '<br>';

// Versão recursiva do exercício

function somaRecursivaUmAte($numero) {
    // Condição de parada!!!!!
    if($numero === 1) {
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
}

echo somaRecursivaUmAte(150) . '<br>';

// Outro exemplo mais "enxuto"

function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(100) . '<br>';